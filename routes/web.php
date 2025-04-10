<?php

use Illuminate\Support\Facades\Route;

// Essa rota é para especificar o que será exibido na página inicial (raiz da aplicação)
Route::get('/', function () {
    return
        'Olá Bruno!';
    // view('welcome');
});


//Rota para a tela onde fala sobre nós
Route::get('/sobre-nos', function () {
    return
        'Sobre nós';
});

//Rota para a tela de contato
Route::get('/contato', function () {
    return
        'Contato';
});