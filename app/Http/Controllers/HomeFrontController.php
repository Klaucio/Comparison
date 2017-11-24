<?php

namespace App\Http\Controllers;

use App\Models\Admin\Banco;
use App\Models\Admin\Servico;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;


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
        //
        $bancos=Banco::paginate(10);
        $servicos=Banco::paginate(10);
        return view('index')->with(['bancos'=>$bancos,'servicos'=>$servicos]);

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
//        print_r(json_encode($bancos, true));
        return view('servicoPorbanco')->with(['bancos'=>$bancos,
            'banks_array'=>$banks_array]);

    }
    public function bindBankServiceResults(Request $request)
    {
        $dados=$request->input('data');//json em forma de string
        $dados=json_decode($dados,true);//json em forma de array

        $this->bancos=$dados['bancos'];
        $service_array = array_map(function($value) { return (int)$value; },$dados['servicos']);

//        $results=DB::select("select * from servicos as s JOIN banco_canal_servicos as bcs
//                             on s.id=bcs.servico_id JOIN bancos as b on b.id=bcs.banco_id
//                            ")->whereIn('bcs.banco_id',$this->bancos);
        $results=Servico::with(['bancos','canals'])
                ->whereHas('bancos', function ($query){
                    $query->whereIn('banco_canal_servicos.banco_id',$this->bancos);
                })
                ->findOrFail($service_array);


//        return json_encode($results);
//        dd($results);

//        print_r($servicos);
        return view('resultado')->with(['servicos'=>$results,'lista_bancos'=>$this->bancos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
