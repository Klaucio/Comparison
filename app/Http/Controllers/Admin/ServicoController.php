<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ServicoDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateServicoRequest;
use App\Http\Requests\Admin\UpdateServicoRequest;
use App\Repositories\Admin\ServicoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ServicoController extends AppBaseController
{
    /** @var  ServicoRepository */
    private $servicoRepository;

    public function __construct(ServicoRepository $servicoRepo)
    {
        $this->servicoRepository = $servicoRepo;
    }

    /**
     * Display a listing of the Servico.
     *
     * @param ServicoDataTable $servicoDataTable
     * @return Response
     */
    public function index(ServicoDataTable $servicoDataTable)
    {
        return $servicoDataTable->render('admin.servicos.index');
    }

    /**
     * Show the form for creating a new Servico.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.servicos.create');
    }

    /**
     * Store a newly created Servico in storage.
     *
     * @param CreateServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateServicoRequest $request)
    {
        $input = $request->all();

        $servico = $this->servicoRepository->create($input);

        Flash::success('Servico saved successfully.');

        return redirect(route('admin.servicos.index'));
    }

    /**
     * Display the specified Servico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servico = $this->servicoRepository->findWithoutFail($id);

        if (empty($servico)) {
            Flash::error('Servico not found');

            return redirect(route('admin.servicos.index'));
        }

        return view('admin.servicos.show')->with('servico', $servico);
    }

    /**
     * Show the form for editing the specified Servico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servico = $this->servicoRepository->findWithoutFail($id);

        if (empty($servico)) {
            Flash::error('Servico not found');

            return redirect(route('admin.servicos.index'));
        }

        return view('admin.servicos.edit')->with('servico', $servico);
    }

    /**
     * Update the specified Servico in storage.
     *
     * @param  int              $id
     * @param UpdateServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicoRequest $request)
    {
        $servico = $this->servicoRepository->findWithoutFail($id);

        if (empty($servico)) {
            Flash::error('Servico not found');

            return redirect(route('admin.servicos.index'));
        }

        $servico = $this->servicoRepository->update($request->all(), $id);

        Flash::success('Servico updated successfully.');

        return redirect(route('admin.servicos.index'));
    }

    /**
     * Remove the specified Servico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servico = $this->servicoRepository->findWithoutFail($id);

        if (empty($servico)) {
            Flash::error('Servico not found');

            return redirect(route('admin.servicos.index'));
        }

        $this->servicoRepository->delete($id);

        Flash::success('Servico deleted successfully.');

        return redirect(route('admin.servicos.index'));
    }
}
