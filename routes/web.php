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
});

Route::post('/Exlui', 'SistemaController@exclui')->name('excluiCadastro');
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