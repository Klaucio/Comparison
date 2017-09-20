<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\CanalDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateCanalRequest;
use App\Http\Requests\Admin\UpdateCanalRequest;
use App\Repositories\Admin\CanalRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CanalController extends AppBaseController
{
    /** @var  CanalRepository */
    private $canalRepository;

    public function __construct(CanalRepository $canalRepo)
    {
        $this->canalRepository = $canalRepo;
    }

    /**
     * Display a listing of the Canal.
     *
     * @param CanalDataTable $canalDataTable
     * @return Response
     */
    public function index(CanalDataTable $canalDataTable)
    {
        return $canalDataTable->render('admin.canals.index');
    }

    /**
     * Show the form for creating a new Canal.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.canals.create');
    }

    /**
     * Store a newly created Canal in storage.
     *
     * @param CreateCanalRequest $request
     *
     * @return Response
     */
    public function store(CreateCanalRequest $request)
    {
        $input = $request->all();

        $canal = $this->canalRepository->create($input);

        Flash::success('Canal saved successfully.');

        return redirect(route('admin.canals.index'));
    }

    /**
     * Display the specified Canal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $canal = $this->canalRepository->findWithoutFail($id);

        if (empty($canal)) {
            Flash::error('Canal not found');

            return redirect(route('admin.canals.index'));
        }

        return view('admin.canals.show')->with('canal', $canal);
    }

    /**
     * Show the form for editing the specified Canal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $canal = $this->canalRepository->findWithoutFail($id);

        if (empty($canal)) {
            Flash::error('Canal not found');

            return redirect(route('admin.canals.index'));
        }

        return view('admin.canals.edit')->with('canal', $canal);
    }

    /**
     * Update the specified Canal in storage.
     *
     * @param  int              $id
     * @param UpdateCanalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCanalRequest $request)
    {
        $canal = $this->canalRepository->findWithoutFail($id);

        if (empty($canal)) {
            Flash::error('Canal not found');

            return redirect(route('admin.canals.index'));
        }

        $canal = $this->canalRepository->update($request->all(), $id);

        Flash::success('Canal updated successfully.');

        return redirect(route('admin.canals.index'));
    }

    /**
     * Remove the specified Canal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $canal = $this->canalRepository->findWithoutFail($id);

        if (empty($canal)) {
            Flash::error('Canal not found');

            return redirect(route('admin.canals.index'));
        }

        $this->canalRepository->delete($id);

        Flash::success('Canal deleted successfully.');

        return redirect(route('admin.canals.index'));
    }
}
