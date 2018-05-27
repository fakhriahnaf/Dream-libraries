<?php

namespace App\Http\Controllers;

use App\Http\Requests\Create$mahasiswaRequest;
use App\Http\Requests\Update$mahasiswaRequest;
use App\Repositories\$mahasiswaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class $mahasiswaController extends AppBaseController
{
    /** @var  $mahasiswaRepository */
    private $$mahasiswaRepository;

    public function __construct($mahasiswaRepository $$mahasiswaRepo)
    {
        $this->$mahasiswaRepository = $$mahasiswaRepo;
    }

    /**
     * Display a listing of the $mahasiswa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->$mahasiswaRepository->pushCriteria(new RequestCriteria($request));
        $$mahasiswas = $this->$mahasiswaRepository->all();

        return view('$mahasiswas.index')
            ->with('$mahasiswas', $$mahasiswas);
    }

    /**
     * Show the form for creating a new $mahasiswa.
     *
     * @return Response
     */
    public function create()
    {
        return view('$mahasiswas.create');
    }

    /**
     * Store a newly created $mahasiswa in storage.
     *
     * @param Create$mahasiswaRequest $request
     *
     * @return Response
     */
    public function store(Create$mahasiswaRequest $request)
    {
        $input = $request->all();

        $$mahasiswa = $this->$mahasiswaRepository->create($input);

        Flash::success('$Mahasiswa saved successfully.');

        return redirect(route('$mahasiswas.index'));
    }

    /**
     * Display the specified $mahasiswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $$mahasiswa = $this->$mahasiswaRepository->findWithoutFail($id);

        if (empty($$mahasiswa)) {
            Flash::error('$Mahasiswa not found');

            return redirect(route('$mahasiswas.index'));
        }

        return view('$mahasiswas.show')->with('$mahasiswa', $$mahasiswa);
    }

    /**
     * Show the form for editing the specified $mahasiswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $$mahasiswa = $this->$mahasiswaRepository->findWithoutFail($id);

        if (empty($$mahasiswa)) {
            Flash::error('$Mahasiswa not found');

            return redirect(route('$mahasiswas.index'));
        }

        return view('$mahasiswas.edit')->with('$mahasiswa', $$mahasiswa);
    }

    /**
     * Update the specified $mahasiswa in storage.
     *
     * @param  int              $id
     * @param Update$mahasiswaRequest $request
     *
     * @return Response
     */
    public function update($id, Update$mahasiswaRequest $request)
    {
        $$mahasiswa = $this->$mahasiswaRepository->findWithoutFail($id);

        if (empty($$mahasiswa)) {
            Flash::error('$Mahasiswa not found');

            return redirect(route('$mahasiswas.index'));
        }

        $$mahasiswa = $this->$mahasiswaRepository->update($request->all(), $id);

        Flash::success('$Mahasiswa updated successfully.');

        return redirect(route('$mahasiswas.index'));
    }

    /**
     * Remove the specified $mahasiswa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $$mahasiswa = $this->$mahasiswaRepository->findWithoutFail($id);

        if (empty($$mahasiswa)) {
            Flash::error('$Mahasiswa not found');

            return redirect(route('$mahasiswas.index'));
        }

        $this->$mahasiswaRepository->delete($id);

        Flash::success('$Mahasiswa deleted successfully.');

        return redirect(route('$mahasiswas.index'));
    }
}
