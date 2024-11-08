<?php

use App\Http\Controllers\AutenticacoesController;
use App\Http\Controllers\ClientesController;
use App\Http\Middleware\VerifyIfIsNotLogged;
use App\Http\Middleware\VerifyIfUserIsLogged;
use Illuminate\Support\Facades\Route;


Route::get('/', [AutenticacoesController::class, 'login'])->name('login');
Route::post('/loginSubmit', [AutenticacoesController::class, 'loginSubmit'])->name('loginSubmit');


Route::get('/home', [ClientesController::class, 'home'])->name('home');
Route::get('/criarCliente', [ClientesController::class, 'criarCliente'])->name('novoCliente');
Route::post('/criarClienteSubmit', [ClientesController::class, 'criarClienteSubmit'])->name('criarClienteSubmit');

Route::get('/logout', [AutenticacoesController::class, 'logout'])->name('logout');
