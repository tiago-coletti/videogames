<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\DesenvolvedoraController;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\VendaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('aluno.list');
});

Route::get('/plataforma', [PlataformaController::class, 'index'])->name('plataforma.index');
Route::get('/plataforma/create', [PlataformaController::class, 'create'])->name('plataforma.create');
Route::post('/plataforma', [PlataformaController::class, 'store'])->name('plataforma.store');
Route::delete('/plataforma/{id}', [PlataformaController::class, 'destroy'])->name('plataforma.destroy');
Route::post('/plataforma/search', [PlataformaController::class, 'search'])->name('plataforma.search');
Route::get('plataforma/edit/{id}', [PlataformaController::class, 'edit'])->name('plataforma.edit');
Route::put('plataforma/update/{id}', [PlataformaController::class, 'update'])->name('plataforma.update');

Route::get('/desenvolvedora', [DesenvolvedoraController::class, 'index'])->name('desenvolvedora.index');
Route::get('/desenvolvedora/create', [DesenvolvedoraController::class, 'create'])->name('desenvolvedora.create');
Route::post('/desenvolvedora', [DesenvolvedoraController::class, 'store'])->name('desenvolvedora.store');
Route::delete('/desenvolvedora/{id}', [DesenvolvedoraController::class, 'destroy'])->name('desenvolvedora.destroy');
Route::post('/desenvolvedora/search', [DesenvolvedoraController::class, 'search'])->name('desenvolvedora.search');
Route::get('desenvolvedora/edit/{id}', [DesenvolvedoraController::class, 'edit'])->name('desenvolvedora.edit');
Route::put('desenvolvedora/update/{id}', [DesenvolvedoraController::class, 'update'])->name('desenvolvedora.update');

Route::get('/jogo', [JogoController::class, 'index'])->name('jogo.index');
Route::get('/jogo/create', [JogoController::class, 'create'])->name('jogo.create');
Route::post('/jogo', [JogoController::class, 'store'])->name('jogo.store');
Route::delete('/jogo/{id}', [JogoController::class, 'destroy'])->name('jogo.destroy');
Route::post('/jogo/search', [JogoController::class, 'search'])->name('jogo.search');
Route::get('jogo/edit/{id}', [JogoController::class, 'edit'])->name('jogo.edit');
Route::put('jogo/update/{id}', [JogoController::class, 'update'])->name('jogo.update');

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
Route::post('/cliente/search', [ClienteController::class, 'search'])->name('cliente.search');
Route::get('cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('cliente/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');

Route::get('/vendedor', [VendedorController::class, 'index'])->name('vendedor.index');
Route::get('/vendedor/create', [VendedorController::class, 'create'])->name('vendedor.create');
Route::post('/vendedor', [VendedorController::class, 'store'])->name('vendedor.store');
Route::delete('/vendedor/{id}', [VendedorController::class, 'destroy'])->name('vendedor.destroy');
Route::post('/vendedor/search', [VendedorController::class, 'search'])->name('vendedor.search');
Route::get('vendedor/edit/{id}', [VendedorController::class, 'edit'])->name('vendedor.edit');
Route::put('vendedor/update/{id}', [VendedorController::class, 'update'])->name('vendedor.update');

Route::get('/venda', [VendaController::class, 'index'])->name('venda.index');
Route::get('/venda/create', [VendaController::class, 'create'])->name('venda.create');
Route::post('/venda', [VendaController::class, 'store'])->name('venda.store');
Route::delete('/venda/{id}', [VendaController::class, 'destroy'])->name('venda.destroy');
Route::post('/venda/search', [VendaController::class, 'search'])->name('venda.search');
Route::get('venda/edit/{id}', [VendaController::class, 'edit'])->name('venda.edit');
Route::put('venda/update/{id}', [VendaController::class, 'update'])->name('venda.update');