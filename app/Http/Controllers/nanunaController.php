<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatenanunaRequest;
use App\Http\Requests\UpdatenanunaRequest;
use App\Repositories\nanunaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class nanunaController extends AppBaseController
{
    /** @var  nanunaRepository */
    private $nanunaRepository;

    public function __construct(nanunaRepository $nanunaRepo)
    {
        $this->nanunaRepository = $nanunaRepo;
    }

    /**
     * Display a listing of the nanuna.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nanunaRepository->pushCriteria(new RequestCriteria($request));
        $nanunas = $this->nanunaRepository->all();

        return view('nanunas.index')
            ->with('nanunas', $nanunas);
    }

    /**
     * Show the form for creating a new nanuna.
     *
     * @return Response
     */
    public function create()
    {
        return view('nanunas.create');
    }

    /**
     * Store a newly created nanuna in storage.
     *
     * @param CreatenanunaRequest $request
     *
     * @return Response
     */
    public function store(CreatenanunaRequest $request)
    {
        $input = $request->all();

        $nanuna = $this->nanunaRepository->create($input);

        Flash::success('Nanuna saved successfully.');

        return redirect(route('nanunas.index'));
    }

    /**
     * Display the specified nanuna.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nanuna = $this->nanunaRepository->findWithoutFail($id);

        if (empty($nanuna)) {
            Flash::error('Nanuna not found');

            return redirect(route('nanunas.index'));
        }

        return view('nanunas.show')->with('nanuna', $nanuna);
    }

    /**
     * Show the form for editing the specified nanuna.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nanuna = $this->nanunaRepository->findWithoutFail($id);

        if (empty($nanuna)) {
            Flash::error('Nanuna not found');

            return redirect(route('nanunas.index'));
        }

        return view('nanunas.edit')->with('nanuna', $nanuna);
    }

    /**
     * Update the specified nanuna in storage.
     *
     * @param  int              $id
     * @param UpdatenanunaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatenanunaRequest $request)
    {
        $nanuna = $this->nanunaRepository->findWithoutFail($id);

        if (empty($nanuna)) {
            Flash::error('Nanuna not found');

            return redirect(route('nanunas.index'));
        }

        $nanuna = $this->nanunaRepository->update($request->all(), $id);

        Flash::success('Nanuna updated successfully.');

        return redirect(route('nanunas.index'));
    }

    /**
     * Remove the specified nanuna from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nanuna = $this->nanunaRepository->findWithoutFail($id);

        if (empty($nanuna)) {
            Flash::error('Nanuna not found');

            return redirect(route('nanunas.index'));
        }

        $this->nanunaRepository->delete($id);

        Flash::success('Nanuna deleted successfully.');

        return redirect(route('nanunas.index'));
    }
}
