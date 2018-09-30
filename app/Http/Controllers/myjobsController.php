<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemyjobsRequest;
use App\Http\Requests\UpdatemyjobsRequest;
use App\Repositories\myjobsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;
use  App\Models as db;

class myjobsController extends AppBaseController
{
    /** @var  myjobsRepository */
    private $myjobsRepository;

    public function __construct(myjobsRepository $myjobsRepo)
    {
        $this->middleware('auth');

         $this->myjobsRepository = $myjobsRepo;

    }

    /**
     * Display a listing of the myjobs.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->myjobsRepository->pushCriteria(new RequestCriteria($request));
        $myjobs = $this->myjobsRepository->all();

        return view('myjobs.index')
            ->with('myjobs', $myjobs);
    }

    /**
     * Show the form for creating a new myjobs.
     *
     * @return Response
     */
    public function create()
    {
        return view('myjobs.create');
    }

    /**
     * Store a newly created myjobs in storage.
     *
     * @param CreatemyjobsRequest $request
     *
     * @return Response
     */
    public function store(CreatemyjobsRequest $request)
    {
        $input = $request->all();
        $input['status'] =1;
        $input['user'] =Auth::user()->id;

        
//dd( $input);
        $myjobs = $this->myjobsRepository->create($input);
        $vehicles =db\vehicles::find($input['vehicle']);
        $vehicles->status=4;
        // if (empty($vehicles)) {
        //     Flash::error('Vehicles not found');

        //     return redirect(route('vehicles.index'));
        // }

        $vehicles->save();

        Flash::success('Vehicles updated successfully.');

        // Flash::success('Myjobs saved successfully.');

        return redirect(route('jobs.show',$input['job']));
    }

    /**
     * Display the specified myjobs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $myjobs = $this->myjobsRepository->findWithoutFail($id);

        if (empty($myjobs)) {
            Flash::error('Myjobs not found');

            return redirect(route('myjobs.index'));
        }

        return view('myjobs.show')->with('myjobs', $myjobs);
    }

    /**
     * Show the form for editing the specified myjobs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $myjobs = $this->myjobsRepository->findWithoutFail($id);

        if (empty($myjobs)) {
            Flash::error('Myjobs not found');

            return redirect(route('myjobs.index'));
        }

        return view('myjobs.edit')->with('myjobs', $myjobs);
    }

    /**
     * Update the specified myjobs in storage.
     *
     * @param  int              $id
     * @param UpdatemyjobsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemyjobsRequest $request)
    {
        $myjobs = $this->myjobsRepository->findWithoutFail($id);
        dd( $input);
        if (empty($myjobs)) {
            Flash::error('Myjobs not found');

            return redirect(route('myjobs.index'));
        }

        $myjobs = $this->myjobsRepository->update($request->all(), $id);

        Flash::success('Myjobs updated successfully.');

        return redirect(route('myjobs.index'));
    }

    /**
     * Remove the specified myjobs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $myjobs = $this->myjobsRepository->findWithoutFail($id);

        if (empty($myjobs)) {
            Flash::error('Myjobs not found');

            return redirect(route('myjobs.index'));
        }

        $this->myjobsRepository->delete($id);

        Flash::success('Myjobs deleted successfully.');

        return redirect(route('myjobs.index'));
    }
}
