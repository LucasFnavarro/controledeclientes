@extends('layouts.main_layout')
@section('content')
    @include('menu_header')

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark border-secondary">
                        <h4 class="mb-0">
                            <i class="fas fa-user-plus me-2"></i>
                            Cadastro de Novo Cliente
                        </h4>
                    </div>
                    <div class="card-body bg-dark">
                        <form action="{{ route('criarClienteSubmit') }}" method="POST" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control bg-dark text-white" id="name"
                                            name="text_name" placeholder="Nome completo">
                                        <label for="name" class="text-light">Nome completo</label>
                                        @error('text_name')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control bg-dark text-white" id="email"
                                            name="text_email" placeholder="nome@exemplo.com">
                                        <label for="email" class="text-light">E-mail</label>
                                        @error('text_email')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control bg-dark text-white" id="password"
                                            name="text_password" placeholder="Senha">
                                        <label for="password" class="text-light">Senha</label>
                                        @error('text_password')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control bg-dark text-white" id="phone"
                                            name="text_phone" placeholder="(00) 00000-0000">
                                        <label for="phone" class="text-light">Telefone</label>
                                        @error('text_phone')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control bg-dark text-white" id="address"
                                            name="text_address" placeholder="Endereço completo">
                                        <label for="address" class="text-light">Endereço completo</label>
                                        @error('text_address')
                                            <div class="alert alert-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <a href="{{ route('home') }}" class="btn btn-outline-light me-2">
                                    <i class="fas fa-times me-2"></i>
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>
                                    Criar Cliente
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Apenas a máscara para o telefone
        document.getElementById('phone').addEventListener('input', function(e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });
    </script>
@endsection
