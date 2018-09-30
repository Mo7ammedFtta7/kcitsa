<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevehiclesRequest;
use App\Http\Requests\UpdatevehiclesRequest;
use App\Repositories\vehiclesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vehiclesController extends AppBaseController
{
    /** @var  vehiclesRepository */
    private $vehiclesRepository;

    public function __construct(vehiclesRepository $vehiclesRepo)
    {
    $this->vehiclesRepository = $vehiclesRepo;
    $this->middleware('auth');

    }

    /**
     * Display a listing of the vehicles.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vehiclesRepository->pushCriteria(new RequestCriteria($request));
        $vehicles = $this->vehiclesRepository->all()->where('user',Auth::user()->id);

        return view('vehicles.index')
            ->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new vehicles.
     *
     * @return Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created vehicles in storage.
     *
     * @param CreatevehiclesRequest $request
     *
     * @return Response
     */
    public function store(CreatevehiclesRequest $request)
    {
        $input = $request->all();

        if (empty($input)) {
            Flash::error('vehicles not found');

            return redirect(route('vehicles.index'));
        }
        if ($request->hasFile('img')) {
            if($request->file('img')->isValid()) {
                try {


                    $photoName = time().'.'.$request->img->getClientOriginalExtension();
                $input['img'] =  $photoName;
              //  dd($photoName);
                $request->img->move(public_path('imgs/jobsmain'), $photoName);

dd(public_path('imgs/jobsmain'));
                    // $file = $request->file('img');
                    // $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        
                    # save to DB
                   // $tickes = Users::create(['imagePath' => 'storage/'.$name]);
        
                    // $request->file('img')->move("storage", $name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
        
                }
            }
        }
        $vehicles = $this->vehiclesRepository->create($input);

        Flash::success('Vehicles saved successfully.');

        return redirect(route('vehicles.index'));
    }

    /**
     * Display the specified vehicles.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehicles = $this->vehiclesRepository->findWithoutFail($id);

        if (empty($vehicles)) {
            Flash::error('Vehicles not found');

            return redirect(route('vehicles.index'));
        }

        return view('vehicles.show')->with('vehicles', $vehicles);
    }

    /**
     * Show the form for editing the specified vehicles.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehicles = $this->vehiclesRepository->findWithoutFail($id);

        if (empty($vehicles)) {
            Flash::error('Vehicles not found');

            return redirect(route('vehicles.index'));
        }

        return view('vehicles.edit')->with('vehicles', $vehicles);
    }

    /**
     * Update the specified vehicles in storage.
     *
     * @param  int              $id
     * @param UpdatevehiclesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevehiclesRequest $request)
    {
        $vehicles = $this->vehiclesRepository->findWithoutFail($id);

        if (empty($vehicles)) {
            Flash::error('Vehicles not found');

            return redirect(route('vehicles.index'));
        }

        $vehicles = $this->vehiclesRepository->update($request->all(), $id);

        Flash::success('Vehicles updated successfully.');

        return redirect(route('vehicles.index'));
    }

    /**
     * Remove the specified vehicles from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehicles = $this->vehiclesRepository->findWithoutFail($id);

        if (empty($vehicles)) {
            Flash::error('Vehicles not found');

            return redirect(route('vehicles.index'));
        }

        $this->vehiclesRepository->delete($id);

        Flash::success('Vehicles deleted successfully.');

        return redirect(route('vehicles.index'));
    }
}
