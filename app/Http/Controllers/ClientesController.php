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

    public function criarClienteSubmit(Request $request)
    {
        $request->validate(
            [
                'text_name' => 'required',
                'text_email' => 'required|email',
                'text_password' => 'required|min:3|max:16',
                'text_phone' => 'required',
                'text_address' => 'required',
            ],

            [
                'text_name.required' => 'É obrigatório fornecer um nome',
                'text_email.required' => 'É obrigatório fornecer um email para o Cliente',
                'text_email.email' => 'Por favor, forneça um e-mail válido',
                'text_password.required' => 'Por favor, forneça uma password',
                'text_password.min' => 'A password deve conter no minimo :min caracteres',
                'text_password.max' => 'A password deve conter no máximo :max caracteres',
                'text_phone.required' => 'Por favor, forneça um número de telefone',
                'text_address.required' => 'Por favor, preencha o endereço do cliente'
            ]
        );

        $name = $request->input('text_name');
        $email = $request->input('text_email');
        $password = $request->input('text_password');
        $phone = $request->input('text_phone');
        $address = $request->input('text_address');


        // CONTINUAR A VALIDAÇÃO !!!
        
        
    }
}
