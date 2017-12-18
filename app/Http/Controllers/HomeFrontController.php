<?php

namespace App\Http\Controllers;

use App\Models\Admin\Banco;
use App\Models\Admin\Servico;
use Illuminate\Http\Request;


class HomeFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $bancos;

    public function __construct()
    {
//        $this->bancos=[];

    }

    public function index()
    {
        return view('index');

    }
    public function bancos()
    {
        return view('banco_bs');

    }

    public function servicos()
    {
        //
//        $servicos=Servico::with('categorias')->get();
        return view('servico_sb');

    }

    /**
     * @param Request $request
     sends to view
     */
    public function bindServicesByBank(Request $request)
    {
        $dados=$request->input('data');
        $dados=json_decode($dados,true);
        $banks_array = array_map(function($value) { return (int)$value; },$dados['bancos']);
        $bancos=Banco::with(['servicos','canals'])->findOrFail($banks_array);
        return view('servicoPorBanco')->with(['bancos'=>$bancos,
            'banks_array'=>$banks_array]);

    }
    public function bindBankServiceResults(Request $request)
    {
        $dados=$request->input('data');//json em forma de string
        $dados=json_decode($dados,true);//json em forma de array
        $this->bancos=$dados['bancos'];
        $service_array = array_map(function($value) { return (int)$value; },$dados['servicos']);
        $results=Servico::with(['bancos','canals'])
                ->whereHas('bancos', function ($query){
                    $query->whereIn('banco_canal_servicos.banco_id',$this->bancos);
                })
                ->findOrFail($service_array);
        return view('resultado_bs')->with(['servicos'=>$results,'lista_bancos'=>$this->bancos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //fluxo sb
    public function bindBanksByService(Request $request)
    {
        $dados=$request->input('data');
        $dados=json_decode($dados,true);
        $services_array = array_map(function($value) { return (int)$value; },$dados['servicos']);
        $selected_services=Servico::with(['bancos','canals'])->findOrFail($services_array);
        return view('bancoPorServico')->with(['selected_services'=>$selected_services,
            'services_array'=>$services_array]);

    }
    public function bindServiceBankResults(Request $request)
    {
        $dados=$request->input('data');//json em forma de string
        $dados=json_decode($dados,true);//json em forma de array
        $this->bancos=$dados['bancos'];
        $service_array = array_map(function($value) { return (int)$value; },$dados['servicos']);
        $results=Servico::with(['bancos','canals'])
            ->whereHas('bancos', function ($query){
                $query->whereIn('banco_canal_servicos.banco_id',$this->bancos);
            })
            ->findOrFail($service_array);
        return view('resultado_sb')->with(['servicos'=>$results,'lista_bancos'=>$this->bancos]);

    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
