<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\BancoDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateBancoRequest;
use App\Http\Requests\Admin\UpdateBancoRequest;
use App\Repositories\Admin\BancoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BancoController extends AppBaseController
{
    /** @var  BancoRepository */
    private $bancoRepository;

    public function __construct(BancoRepository $bancoRepo)
    {
        $this->bancoRepository = $bancoRepo;
    }

    /**
     * Display a listing of the Banco.
     *
     * @param BancoDataTable $bancoDataTable
     * @return Response
     */
    public function index(BancoDataTable $bancoDataTable)
    {
        return $bancoDataTable->render('admin.bancos.index');
    }

    /**
     * Show the form for creating a new Banco.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.bancos.create');
    }

    /**
     * Store a newly created Banco in storage.
     *
     * @param CreateBancoRequest $request
     *
     * @return Response
     */
    public function store(CreateBancoRequest $request)
    {
        $input = $request->all();

        $banco = $this->bancoRepository->create($input);

        Flash::success('Banco saved successfully.');

        return redirect(route('admin.bancos.index'));
    }

    /**
     * Display the specified Banco.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banco = $this->bancoRepository->findWithoutFail($id);

        if (empty($banco)) {
            Flash::error('Banco not found');

            return redirect(route('admin.bancos.index'));
        }

        return view('admin.bancos.show')->with('banco', $banco);
    }

    /**
     * Show the form for editing the specified Banco.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $banco = $this->bancoRepository->findWithoutFail($id);

        if (empty($banco)) {
            Flash::error('Banco not found');

            return redirect(route('admin.bancos.index'));
        }

        return view('admin.bancos.edit')->with('banco', $banco);
    }

    /**
     * Update the specified Banco in storage.
     *
     * @param  int              $id
     * @param UpdateBancoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBancoRequest $request)
    {
        $banco = $this->bancoRepository->findWithoutFail($id);

        if (empty($banco)) {
            Flash::error('Banco not found');

            return redirect(route('admin.bancos.index'));
        }

        $banco = $this->bancoRepository->update($request->all(), $id);

        Flash::success('Banco updated successfully.');

        return redirect(route('admin.bancos.index'));
    }

    /**
     * Remove the specified Banco from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $banco = $this->bancoRepository->findWithoutFail($id);

        if (empty($banco)) {
            Flash::error('Banco not found');

            return redirect(route('admin.bancos.index'));
        }

        $this->bancoRepository->delete($id);

        Flash::success('Banco deleted successfully.');

        return redirect(route('admin.bancos.index'));
    }
}
