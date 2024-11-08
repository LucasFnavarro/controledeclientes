@extends('layouts.main_layout')
@section('content')
    <div class="p-5 bg-light rounded shadow-lg" style="width: 100%; max-width: 550px;">
        <h2 class="text-center text-dark mb-4">Logar no Controle de Clientes</h2>

        <form method="POST" action="{{ route('loginSubmit') }}" novalidate>
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label text-dark">Email</label>
                <input type="email" id="email" name="text_email" class="form-control" required
                    value="{{ old('text_email') }}">
                @error('text_email')
                    <div class="alert alert-danger text-center p-0 m-2">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-dark">Senha</label>
                <input type="password" id="password" name="text_password" class="form-control" required
                    value="{{ old('text_password') }}">
                @error('text_password')
                    <div class="alert alert-danger text-center p-0 m-2">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox" name="check_remember" id="remember">
                    <label for="remember" class="text-dark">Lembrar</label>
                </div>
                <a href="#" class="text-dark">Esqueceu a password?</a>
            </div>

            <button type="submit" class="btn btn-dark w-100">LOGAR</button>
        </form>

        @if (session('loginError'))
            <div class="alert alert-danger text-center p-1 m-2">
                <p>{{ session('loginError') }}</p>
            </div>
        @endif
    </div>
@endsection
