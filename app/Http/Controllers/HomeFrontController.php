<?php

namespace App\Http\Controllers;

use App\Models\Admin\Banco;
use App\Servico;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use function MongoDB\BSON\toJSON;


class HomeFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bancos=Banco::paginate(10);
        $servicos=Banco::paginate(10);
        return view('index')->with(['bancos'=>$bancos,'servicos'=>$servicos]);

    }

    /**
     * @param Request $request
     */
    public function servicosByBank(Request $request)
    {
        $data=$request->input('data');//json em forma de string
        $bancos=json_decode($data,true);//json em forma de array
        return view('servicoPorbanco')->with(['bancos'=>$bancos,'data'=>$data]);

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
