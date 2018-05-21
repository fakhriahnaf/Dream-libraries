<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateayamRequest;
use App\Http\Requests\UpdateayamRequest;
use App\Repositories\ayamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ayamController extends AppBaseController
{
    /** @var  ayamRepository */
    private $ayamRepository;

    public function __construct(ayamRepository $ayamRepo)
    {
        $this->ayamRepository = $ayamRepo;
    }

    /**
     * Display a listing of the ayam.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ayamRepository->pushCriteria(new RequestCriteria($request));
        $ayams = $this->ayamRepository->all();

        return view('ayams.index')
            ->with('ayams', $ayams);
    }

    /**
     * Show the form for creating a new ayam.
     *
     * @return Response
     */
    public function create()
    {
        return view('ayams.create');
    }

    /**
     * Store a newly created ayam in storage.
     *
     * @param CreateayamRequest $request
     *
     * @return Response
     */
    public function store(CreateayamRequest $request)
    {
        $input = $request->all();

        $ayam = $this->ayamRepository->create($input);

        Flash::success('Ayam saved successfully.');

        return redirect(route('ayams.index'));
    }

    /**
     * Display the specified ayam.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ayam = $this->ayamRepository->findWithoutFail($id);

        if (empty($ayam)) {
            Flash::error('Ayam not found');

            return redirect(route('ayams.index'));
        }

        return view('ayams.show')->with('ayam', $ayam);
    }

    /**
     * Show the form for editing the specified ayam.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ayam = $this->ayamRepository->findWithoutFail($id);

        if (empty($ayam)) {
            Flash::error('Ayam not found');

            return redirect(route('ayams.index'));
        }

        return view('ayams.edit')->with('ayam', $ayam);
    }

    /**
     * Update the specified ayam in storage.
     *
     * @param  int              $id
     * @param UpdateayamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateayamRequest $request)
    {
        $ayam = $this->ayamRepository->findWithoutFail($id);

        if (empty($ayam)) {
            Flash::error('Ayam not found');

            return redirect(route('ayams.index'));
        }

        $ayam = $this->ayamRepository->update($request->all(), $id);

        Flash::success('Ayam updated successfully.');

        return redirect(route('ayams.index'));
    }

    /**
     * Remove the specified ayam from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ayam = $this->ayamRepository->findWithoutFail($id);

        if (empty($ayam)) {
            Flash::error('Ayam not found');

            return redirect(route('ayams.index'));
        }

        $this->ayamRepository->delete($id);

        Flash::success('Ayam deleted successfully.');

        return redirect(route('ayams.index'));
    }
}
