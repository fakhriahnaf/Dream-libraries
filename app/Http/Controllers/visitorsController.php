<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevisitorsRequest;
use App\Http\Requests\UpdatevisitorsRequest;
use App\Repositories\visitorsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class visitorsController extends AppBaseController
{
    /** @var  visitorsRepository */
    private $visitorsRepository;

    public function __construct(visitorsRepository $visitorsRepo)
    {
        $this->visitorsRepository = $visitorsRepo;
    }

    /**
     * Display a listing of the visitors.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->visitorsRepository->pushCriteria(new RequestCriteria($request));
        $visitors = $this->visitorsRepository->all();

        return view('visitors.index')
            ->with('visitors', $visitors);
    }

    /**
     * Show the form for creating a new visitors.
     *
     * @return Response
     */
    public function create()
    {
        return view('visitors.create');
    }

    /**
     * Store a newly created visitors in storage.
     *
     * @param CreatevisitorsRequest $request
     *
     * @return Response
     */
    public function store(CreatevisitorsRequest $request)
    {
        $input = $request->all();

        $visitors = $this->visitorsRepository->create($input);

        Flash::success('Visitors saved successfully.');

        return redirect(route('visitors.index'));
    }

    /**
     * Display the specified visitors.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visitors = $this->visitorsRepository->findWithoutFail($id);

        if (empty($visitors)) {
            Flash::error('Visitors not found');

            return redirect(route('visitors.index'));
        }

        return view('visitors.show')->with('visitors', $visitors);
    }

    /**
     * Show the form for editing the specified visitors.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visitors = $this->visitorsRepository->findWithoutFail($id);

        if (empty($visitors)) {
            Flash::error('Visitors not found');

            return redirect(route('visitors.index'));
        }

        return view('visitors.edit')->with('visitors', $visitors);
    }

    /**
     * Update the specified visitors in storage.
     *
     * @param  int              $id
     * @param UpdatevisitorsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevisitorsRequest $request)
    {
        $visitors = $this->visitorsRepository->findWithoutFail($id);

        if (empty($visitors)) {
            Flash::error('Visitors not found');

            return redirect(route('visitors.index'));
        }

        $visitors = $this->visitorsRepository->update($request->all(), $id);

        Flash::success('Visitors updated successfully.');

        return redirect(route('visitors.index'));
    }

    /**
     * Remove the specified visitors from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visitors = $this->visitorsRepository->findWithoutFail($id);

        if (empty($visitors)) {
            Flash::error('Visitors not found');

            return redirect(route('visitors.index'));
        }

        $this->visitorsRepository->delete($id);

        Flash::success('Visitors deleted successfully.');

        return redirect(route('visitors.index'));
    }
}
