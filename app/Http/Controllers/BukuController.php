<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Repositories\BukuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BukuController extends AppBaseController
{
    /** @var  BukuRepository */
    private $bukuRepository;

    public function __construct(BukuRepository $bukuRepo)
    {
        $this->bukuRepository = $bukuRepo;
    }

    /**
     * Display a listing of the Buku.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bukuRepository->pushCriteria(new RequestCriteria($request));
        $bukus = $this->bukuRepository->all();

        return view('bukus.index')
            ->with('bukus', $bukus);
    }

    /**
     * Show the form for creating a new Buku.
     *
     * @return Response
     */
    public function create()
    {
        return view('bukus.create');
    }

    /**
     * Store a newly created Buku in storage.
     *
     * @param CreateBukuRequest $request
     *
     * @return Response
     */
    public function store(CreateBukuRequest $request)
    {
        $input = $request->all();

        $buku = $this->bukuRepository->create($input);

        Flash::success('Buku saved successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Display the specified Buku.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        return view('bukus.show')->with('buku', $buku);
    }

    /**
     * Show the form for editing the specified Buku.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        return view('bukus.edit')->with('buku', $buku);
    }

    /**
     * Update the specified Buku in storage.
     *
     * @param  int              $id
     * @param UpdateBukuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBukuRequest $request)
    {
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        $buku = $this->bukuRepository->update($request->all(), $id);

        Flash::success('Buku updated successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Remove the specified Buku from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        $this->bukuRepository->delete($id);

        Flash::success('Buku deleted successfully.');

        return redirect(route('bukus.index'));
    }
}
