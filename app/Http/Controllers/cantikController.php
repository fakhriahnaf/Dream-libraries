<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecantikRequest;
use App\Http\Requests\UpdatecantikRequest;
use App\Repositories\cantikRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class cantikController extends AppBaseController
{
    /** @var  cantikRepository */
    private $cantikRepository;

    public function __construct(cantikRepository $cantikRepo)
    {
        $this->cantikRepository = $cantikRepo;
    }

    /**
     * Display a listing of the cantik.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cantikRepository->pushCriteria(new RequestCriteria($request));
        $cantiks = $this->cantikRepository->all();

        return view('cantiks.index')
            ->with('cantiks', $cantiks);
    }

    /**
     * Show the form for creating a new cantik.
     *
     * @return Response
     */
    public function create()
    {
        return view('cantiks.create');
    }

    /**
     * Store a newly created cantik in storage.
     *
     * @param CreatecantikRequest $request
     *
     * @return Response
     */
    public function store(CreatecantikRequest $request)
    {
        $input = $request->all();

        $cantik = $this->cantikRepository->create($input);

        Flash::success('Cantik saved successfully.');

        return redirect(route('cantiks.index'));
    }

    /**
     * Display the specified cantik.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cantik = $this->cantikRepository->findWithoutFail($id);

        if (empty($cantik)) {
            Flash::error('Cantik not found');

            return redirect(route('cantiks.index'));
        }

        return view('cantiks.show')->with('cantik', $cantik);
    }

    /**
     * Show the form for editing the specified cantik.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cantik = $this->cantikRepository->findWithoutFail($id);

        if (empty($cantik)) {
            Flash::error('Cantik not found');

            return redirect(route('cantiks.index'));
        }

        return view('cantiks.edit')->with('cantik', $cantik);
    }

    /**
     * Update the specified cantik in storage.
     *
     * @param  int              $id
     * @param UpdatecantikRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecantikRequest $request)
    {
        $cantik = $this->cantikRepository->findWithoutFail($id);

        if (empty($cantik)) {
            Flash::error('Cantik not found');

            return redirect(route('cantiks.index'));
        }

        $cantik = $this->cantikRepository->update($request->all(), $id);

        Flash::success('Cantik updated successfully.');

        return redirect(route('cantiks.index'));
    }

    /**
     * Remove the specified cantik from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cantik = $this->cantikRepository->findWithoutFail($id);

        if (empty($cantik)) {
            Flash::error('Cantik not found');

            return redirect(route('cantiks.index'));
        }

        $this->cantikRepository->delete($id);

        Flash::success('Cantik deleted successfully.');

        return redirect(route('cantiks.index'));
    }
}
