<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebebekRequest;
use App\Http\Requests\UpdatebebekRequest;
use App\Repositories\bebekRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class bebekController extends AppBaseController
{
    /** @var  bebekRepository */
    private $bebekRepository;

    public function __construct(bebekRepository $bebekRepo)
    {
        $this->bebekRepository = $bebekRepo;
    }

    /**
     * Display a listing of the bebek.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bebekRepository->pushCriteria(new RequestCriteria($request));
        $bebeks = $this->bebekRepository->all();

        return view('bebeks.index')
            ->with('bebeks', $bebeks);
    }

    /**
     * Show the form for creating a new bebek.
     *
     * @return Response
     */
    public function create()
    {
        return view('bebeks.create');
    }

    /**
     * Store a newly created bebek in storage.
     *
     * @param CreatebebekRequest $request
     *
     * @return Response
     */
    public function store(CreatebebekRequest $request)
    {
        $input = $request->all();

        $bebek = $this->bebekRepository->create($input);

        Flash::success('Bebek saved successfully.');

        return redirect(route('bebeks.index'));
    }

    /**
     * Display the specified bebek.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bebek = $this->bebekRepository->findWithoutFail($id);

        if (empty($bebek)) {
            Flash::error('Bebek not found');

            return redirect(route('bebeks.index'));
        }

        return view('bebeks.show')->with('bebek', $bebek);
    }

    /**
     * Show the form for editing the specified bebek.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bebek = $this->bebekRepository->findWithoutFail($id);

        if (empty($bebek)) {
            Flash::error('Bebek not found');

            return redirect(route('bebeks.index'));
        }

        return view('bebeks.edit')->with('bebek', $bebek);
    }

    /**
     * Update the specified bebek in storage.
     *
     * @param  int              $id
     * @param UpdatebebekRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebebekRequest $request)
    {
        $bebek = $this->bebekRepository->findWithoutFail($id);

        if (empty($bebek)) {
            Flash::error('Bebek not found');

            return redirect(route('bebeks.index'));
        }

        $bebek = $this->bebekRepository->update($request->all(), $id);

        Flash::success('Bebek updated successfully.');

        return redirect(route('bebeks.index'));
    }

    /**
     * Remove the specified bebek from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bebek = $this->bebekRepository->findWithoutFail($id);

        if (empty($bebek)) {
            Flash::error('Bebek not found');

            return redirect(route('bebeks.index'));
        }

        $this->bebekRepository->delete($id);

        Flash::success('Bebek deleted successfully.');

        return redirect(route('bebeks.index'));
    }
}
