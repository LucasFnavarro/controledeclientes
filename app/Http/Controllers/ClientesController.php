<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function criarCliente()
    {
        return view('create_new_client');
    }
}
