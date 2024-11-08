<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AutenticacoesController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate(
            [
                'text_email' => 'required|email',
                'text_password' => 'required|min:3|max:16'
            ],

            [
                'text_email.required' => 'Por favor, preencha o campo de login',
                'text_email.email' => 'Por favor, o login deve ser do tipo email',
                'text_password.required' => 'Por favor, preencha o campo de password',
                'text_password.min' => 'A password deve conter no minimo :min caracteres',
                'text_password.max' => 'A password deve conter no máximo :max caracteres'
            ]
        );

        $username = $request->input('text_email');
        $password = $request->input('text_password');

        $user = User::where('email', $username)->whereNull('deleted_at')->first();

        if (!$user) {
            return redirect()->back()->withInput()->with('loginError', 'Usuário e/ou senha incorretos');
        }

        if (!password_verify($password, $user->password)) {
            return redirect()->back()->withInput()->with('loginError', 'Usuário e/ou senha incorretos');
        }

        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        session([
            'user' => [
                'id' => $user->id,
                'username' => $user->email
            ]
        ]);

        return redirect()->route('home');
    }


    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
