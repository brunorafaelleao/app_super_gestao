<?php

use App\Http\Controllers\FornecedorController;
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
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');


Route::prefix('app')->group(function () {
    Route::get('/login', function () {
        return 'Login';
    })->name('app.login ');

    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.login ');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedor.index');
});

Route::get('/teste', function () {
    return view('site.exemplo');
});

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para a página inicial';
    // return redirect()->route('site.index');
});


// Route::get('/contato/{nome}', function (string $nome) {
//     echo 'Estamos aqui: ' . $nome;
// });