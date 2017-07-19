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

//ROTAS DO SISTEMA--------------------------------------------------------------------------//
Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::post('/ListaSimulacao/InformacaoCliente', 'SistemaController@informa');//->name('infoCliente');
//Route::get('/InformacaoCliente/{clienteCpf?}', function (){
//    return view('welcome');
//});

Route::post('/Exclui', 'SistemaController@exclui')->name('excluiCadastro');

//Route::post('/Erro', 'SistemaController@erro')->name('erroCadastro');

//__________________________________________________________________________________________//


//ROTAS DAS SIMULAÇÕES-----------------------------------------------------------------------//
Route::get('/Simular', function (){
    return view('Simular');
})->name('formSimulacao');

Route::post('/Simulacao', 'SimulacaoController@simula')->name('simula');

Route::post('/Simular', 'SimulacaoController@cadastra')->name('cadastraSimulacao');

Route::get('/ListaSimulacao', 'SimulacaoController@lista')->name('listaSimulacao');

Route::post('/ListaSimulacao', 'SimulacaoController@age')->name('age');
//__________________________________________________________________________________________//



//ROTAS DOS CLIENTES------------------------------------------------------------------------//

Route::get('/CadastrarCliente', function (){
    return view('CadastrarCliente');
})->name('formCliente');

Route::post('/CadastroCliente', 'ClienteController@cadastro')->name('cadastroCliente');

Route::get('/ListaClientes', 'ClienteController@lista')->name('listaCliente');
//__________________________________________________________________________________________//



//ROTAS DOS IMÓVEIS------------------------------------------------------------------------//

Route::get('/CadastrarImovel', function(){
    return view('CadastrarImovel') ;
})->name('formImovel');

Route::post('/CadastroImovel', 'ImovelController@cadastro')->name('cadastroImovel');

Route::get('/ListaImovel', 'ImovelController@lista')->name('listaImovel');
//__________________________________________________________________________________________//