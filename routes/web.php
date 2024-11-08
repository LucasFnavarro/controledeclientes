<?php

use App\Http\Controllers\AutenticacoesController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AutenticacoesController::class, 'login'])->name('login');
Route::post('/loginSubmit', [AutenticacoesController::class, 'loginSubmit'])->name('loginSubmit');



Route::get('/home', [ClientesController::class, 'home'])->name('home');
Route::get('/criarCliente', [ClientesController::class, 'criarCliente'])->name('novoCliente');
