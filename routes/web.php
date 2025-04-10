<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

// Essa rota é para especificar o que será exibido na página inicial (raiz da aplicação)
/*Route::get('/', function () {
    return
        'Olá Bruno!';
    // view('welcome');
});
*/

/*
//Rota para a tela onde fala sobre nós
Route::get('/sobre-nos', function () {
    return
        'Sobre nós';
});

//Rota para a tela de contato
Route::get('/contato', function () {
    return
        'Contato';
});*/

// A partir do Laravel 8, a forma recomendada para definir controllers nas rotas é usando array notation com ::class
Route::get('/', [PrincipalController::class, 'principal']);
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);
Route::get('/contato', [ContatoController::class, 'contato']);


