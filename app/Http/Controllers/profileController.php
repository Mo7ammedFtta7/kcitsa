<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprofileRequest;
use App\Http\Requests\UpdateprofileRequest;
use App\Repositories\profileRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;

class profileController extends AppBaseController
{
    /** @var  profileRepository */
    private $profileRepository;

    public function __construct(profileRepository $profileRepo)
    {
        $this->profileRepository = $profileRepo;
            $this->middleware('auth');

    }

    /**
     * Display a listing of the profile.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        // $this->profileRepository->pushCriteria(new RequestCriteria($request));
        // $profiles = $this->profileRepository->all();
        $profiles = $this->profileRepository->findWithoutFail(Auth::user()->id);

        // if (empty($profile)) {
        //     Flash::error('Profile not found');

        //     return redirect(route('profiles.index'));
        // }

        // return view('profiles.edit')->with('profile', $profile);

        return view('profiles.index')
            ->with('profiles', $profiles);
    }

    /**
     * Show the form for creating a new profile.
     *
     * @return Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created profile in storage.
     *
     * @param CreateprofileRequest $request
     *
     * @return Response
     */
    public function store(CreateprofileRequest $request)
    {
        $input = $request->all();

        $profile = $this->profileRepository->create($input);

        Flash::success('Profile saved successfully.');

        return redirect(route('profiles.index'));
    }

    /**
     * Display the specified profile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profile = $this->profileRepository->findWithoutFail($id);

        if (empty($profile)) {
            Flash::error('Profile not found');

            return redirect(route('profiles.index'));
        }

        return view('profiles.show')->with('profile', $profile);
    }

    /**
     * Show the form for editing the specified profile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profile = $this->profileRepository->findWithoutFail($id);

        if (empty($profile)) {
            Flash::error('Profile not found');

            return redirect(route('profiles.index'));
        }

        return view('profiles.edit')->with('profile', $profile);
    }

    /**
     * Update the specified profile in storage.
     *
     * @param  int              $id
     * @param UpdateprofileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprofileRequest $request)
    {
        $profile = $this->profileRepository->findWithoutFail($id);
        $input = $request->all();

        if (empty($profile)) {
            Flash::error('Profile not found');

            return redirect(route('profiles.index'));
        }
        if ($request->hasFile('img')) {
            if($request->file('img')->isValid()) {
                try {


                    $photoName = time().'.'.$request->img->getClientOriginalExtension();
                $input['img'] =  $photoName;
              //  dd($photoName);
                $request->img->move(public_path('imgs'), $photoName);


                    // $file = $request->file('img');
                    // $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        
                    # save to DB
                   // $tickes = Users::create(['imagePath' => 'storage/'.$name]);
        
                    // $request->file('img')->move("storage", $name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
        
                }
            }
        }
        $profile = $this->profileRepository->update( $input, $id);

        Flash::success('Profile updated successfully.');

        return redirect(route('profiles.index'));
    }

    /**
     * Remove the specified profile from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profile = $this->profileRepository->findWithoutFail($id);

        if (empty($profile)) {
            Flash::error('Profile not found');

            return redirect(route('profiles.index'));
        }

        $this->profileRepository->delete($id);

        Flash::success('Profile deleted successfully.');

        return redirect(route('profiles.index'));
    }
}
