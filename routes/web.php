<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*----------------------------------------
 *              Routes for Json data
 * --------------------------------------*/

Route::prefix('api')->group(function() {
    Route::get('/bankData', function () {
        $banks=\App\Models\Admin\Banco::all();
        return response()->json($banks);
    });
    Route::get('/serviceData', function () {
        $servicos=\App\Models\Admin\Banco::all();
        return json_encode($servicos->toArray());
    });
    Route::get('/canalData', function () {
        $canais=\App\Models\Admin\Canal::all();
        return json_encode($canais->toArray());
    });
    Route::get('/canalServicoData', function () {
        $canal_servico=\App\Models\Admin\CanalServico::all();
        return json_encode($canal_servico->toArray());
    });

});
/*----------------------------------------
 *              Routes for Views
 * --------------------------------------*/
Route::get('/teste', function () {
    return view('index_organising');
});
Route::get('/servicosBanco', function () {
//    return view('servicoPorbanco');
    $servicos=\App\Servico::paginate(10);
    return view('servicoPorbanco')->with(['servicos'=>$servicos]);
});

Route::get('/resultado', function () {
    return view('resultado');
});
Route::get('/', 'HomeFrontController@index');
Route::get('/servicos', 'ServicoController@index');
Route::post('/serviceByBank', ['as'=> 'servicos', 'uses' => 'HomeFrontController\BancoController@servicosByBank']);


Auth::routes();

Route::get('/admin', 'HomeController@index');

Route::get('admin/bancos', ['as'=> 'admin.bancos.index', 'uses' => 'Admin\BancoController@index']);
Route::post('admin/bancos', ['as'=> 'admin.bancos.store', 'uses' => 'Admin\BancoController@store']);
Route::get('admin/bancos/create', ['as'=> 'admin.bancos.create', 'uses' => 'Admin\BancoController@create']);
Route::put('admin/bancos/{bancos}', ['as'=> 'admin.bancos.update', 'uses' => 'Admin\BancoController@update']);
Route::patch('admin/bancos/{bancos}', ['as'=> 'admin.bancos.update', 'uses' => 'Admin\BancoController@update']);
Route::delete('admin/bancos/{bancos}', ['as'=> 'admin.bancos.destroy', 'uses' => 'Admin\BancoController@destroy']);
Route::get('admin/bancos/{bancos}', ['as'=> 'admin.bancos.show', 'uses' => 'Admin\BancoController@show']);
Route::get('admin/bancos/{bancos}/edit', ['as'=> 'admin.bancos.edit', 'uses' => 'Admin\BancoController@edit']);


Route::get('admin/bancos', ['as'=> 'admin.bancos.index', 'uses' => 'Admin\BancoController@index']);
Route::post('admin/bancos', ['as'=> 'admin.bancos.store', 'uses' => 'Admin\BancoController@store']);
Route::get('admin/bancos/create', ['as'=> 'admin.bancos.create', 'uses' => 'Admin\BancoController@create']);
Route::put('admin/bancos/{bancos}', ['as'=> 'admin.bancos.update', 'uses' => 'Admin\BancoController@update']);
Route::patch('admin/bancos/{bancos}', ['as'=> 'admin.bancos.update', 'uses' => 'Admin\BancoController@update']);
Route::delete('admin/bancos/{bancos}', ['as'=> 'admin.bancos.destroy', 'uses' => 'Admin\BancoController@destroy']);
Route::get('admin/bancos/{bancos}', ['as'=> 'admin.bancos.show', 'uses' => 'Admin\BancoController@show']);
Route::get('admin/bancos/{bancos}/edit', ['as'=> 'admin.bancos.edit', 'uses' => 'Admin\BancoController@edit']);


Route::get('admin/servicos', ['as'=> 'admin.servicos.index', 'uses' => 'Admin\ServicoController@index']);
Route::post('admin/servicos', ['as'=> 'admin.servicos.store', 'uses' => 'Admin\ServicoController@store']);
Route::get('admin/servicos/create', ['as'=> 'admin.servicos.create', 'uses' => 'Admin\ServicoController@create']);
Route::put('admin/servicos/{servicos}', ['as'=> 'admin.servicos.update', 'uses' => 'Admin\ServicoController@update']);
Route::patch('admin/servicos/{servicos}', ['as'=> 'admin.servicos.update', 'uses' => 'Admin\ServicoController@update']);
Route::delete('admin/servicos/{servicos}', ['as'=> 'admin.servicos.destroy', 'uses' => 'Admin\ServicoController@destroy']);
Route::get('admin/servicos/{servicos}', ['as'=> 'admin.servicos.show', 'uses' => 'Admin\ServicoController@show']);
Route::get('admin/servicos/{servicos}/edit', ['as'=> 'admin.servicos.edit', 'uses' => 'Admin\ServicoController@edit']);


Route::get('admin/categorias', ['as'=> 'admin.categorias.index', 'uses' => 'Admin\CategoriaController@index']);
Route::post('admin/categorias', ['as'=> 'admin.categorias.store', 'uses' => 'Admin\CategoriaController@store']);
Route::get('admin/categorias/create', ['as'=> 'admin.categorias.create', 'uses' => 'Admin\CategoriaController@create']);
Route::put('admin/categorias/{categorias}', ['as'=> 'admin.categorias.update', 'uses' => 'Admin\CategoriaController@update']);
Route::patch('admin/categorias/{categorias}', ['as'=> 'admin.categorias.update', 'uses' => 'Admin\CategoriaController@update']);
Route::delete('admin/categorias/{categorias}', ['as'=> 'admin.categorias.destroy', 'uses' => 'Admin\CategoriaController@destroy']);
Route::get('admin/categorias/{categorias}', ['as'=> 'admin.categorias.show', 'uses' => 'Admin\CategoriaController@show']);
Route::get('admin/categorias/{categorias}/edit', ['as'=> 'admin.categorias.edit', 'uses' => 'Admin\CategoriaController@edit']);


Route::get('admin/canals', ['as'=> 'admin.canals.index', 'uses' => 'Admin\CanalController@index']);
Route::post('admin/canals', ['as'=> 'admin.canals.store', 'uses' => 'Admin\CanalController@store']);
Route::get('admin/canals/create', ['as'=> 'admin.canals.create', 'uses' => 'Admin\CanalController@create']);
Route::put('admin/canals/{canals}', ['as'=> 'admin.canals.update', 'uses' => 'Admin\CanalController@update']);
Route::patch('admin/canals/{canals}', ['as'=> 'admin.canals.update', 'uses' => 'Admin\CanalController@update']);
Route::delete('admin/canals/{canals}', ['as'=> 'admin.canals.destroy', 'uses' => 'Admin\CanalController@destroy']);
Route::get('admin/canals/{canals}', ['as'=> 'admin.canals.show', 'uses' => 'Admin\CanalController@show']);
Route::get('admin/canals/{canals}/edit', ['as'=> 'admin.canals.edit', 'uses' => 'Admin\CanalController@edit']);


Route::get('admin/canalServicos', ['as'=> 'admin.canalServicos.index', 'uses' => 'Admin\CanalServicoController@index']);
Route::post('admin/canalServicos', ['as'=> 'admin.canalServicos.store', 'uses' => 'Admin\CanalServicoController@store']);
Route::get('admin/canalServicos/create', ['as'=> 'admin.canalServicos.create', 'uses' => 'Admin\CanalServicoController@create']);
Route::put('admin/canalServicos/{canalServicos}', ['as'=> 'admin.canalServicos.update', 'uses' => 'Admin\CanalServicoController@update']);
Route::patch('admin/canalServicos/{canalServicos}', ['as'=> 'admin.canalServicos.update', 'uses' => 'Admin\CanalServicoController@update']);
Route::delete('admin/canalServicos/{canalServicos}', ['as'=> 'admin.canalServicos.destroy', 'uses' => 'Admin\CanalServicoController@destroy']);
Route::get('admin/canalServicos/{canalServicos}', ['as'=> 'admin.canalServicos.show', 'uses' => 'Admin\CanalServicoController@show']);
Route::get('admin/canalServicos/{canalServicos}/edit', ['as'=> 'admin.canalServicos.edit', 'uses' => 'Admin\CanalServicoController@edit']);
