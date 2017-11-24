<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\CanalServicoDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateCanalServicoRequest;
use App\Http\Requests\Admin\UpdateCanalServicoRequest;
use App\Repositories\Admin\CanalServicoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CanalServicoController extends AppBaseController
{
    /** @var  CanalServicoRepository */
    private $canalServicoRepository;

    public function __construct(CanalServicoRepository $canalServicoRepo)
    {
        $this->canalServicoRepository = $canalServicoRepo;
    }

    /**
     * Display a listing of the BancoCanalServico.
     *
     * @param CanalServicoDataTable $canalServicoDataTable
     * @return Response
     */
    public function index(CanalServicoDataTable $canalServicoDataTable)
    {
        return $canalServicoDataTable->render('admin.canal_servicos.index');
    }

    /**
     * Show the form for creating a new BancoCanalServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.canal_servicos.create');
    }

    /**
     * Store a newly created BancoCanalServico in storage.
     *
     * @param CreateCanalServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateCanalServicoRequest $request)
    {
        $input = $request->all();

        $canalServico = $this->canalServicoRepository->create($input);

        Flash::success('Canal Servico saved successfully.');

        return redirect(route('admin.canalServicos.index'));
    }

    /**
     * Display the specified BancoCanalServico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $canalServico = $this->canalServicoRepository->findWithoutFail($id);

        if (empty($canalServico)) {
            Flash::error('Canal Servico not found');

            return redirect(route('admin.canalServicos.index'));
        }

        return view('admin.canal_servicos.show')->with('canalServico', $canalServico);
    }

    /**
     * Show the form for editing the specified BancoCanalServico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $canalServico = $this->canalServicoRepository->findWithoutFail($id);

        if (empty($canalServico)) {
            Flash::error('Canal Servico not found');

            return redirect(route('admin.canalServicos.index'));
        }

        return view('admin.canal_servicos.edit')->with('canalServico', $canalServico);
    }

    /**
     * Update the specified BancoCanalServico in storage.
     *
     * @param  int              $id
     * @param UpdateCanalServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCanalServicoRequest $request)
    {
        $canalServico = $this->canalServicoRepository->findWithoutFail($id);

        if (empty($canalServico)) {
            Flash::error('Canal Servico not found');

            return redirect(route('admin.canalServicos.index'));
        }

        $canalServico = $this->canalServicoRepository->update($request->all(), $id);

        Flash::success('Canal Servico updated successfully.');

        return redirect(route('admin.canalServicos.index'));
    }

    /**
     * Remove the specified BancoCanalServico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $canalServico = $this->canalServicoRepository->findWithoutFail($id);

        if (empty($canalServico)) {
            Flash::error('Canal Servico not found');

            return redirect(route('admin.canalServicos.index'));
        }

        $this->canalServicoRepository->delete($id);

        Flash::success('Canal Servico deleted successfully.');

        return redirect(route('admin.canalServicos.index'));
    }
}
