@extends('layouts.main_layout')
@section('content')
    @include('menu_header')

    <div id="content" class="p-4">
        <!-- Cabeçalho com Boas-vindas -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-white">
                <i class="fas fa-tachometer-alt me-2"></i>
                Dashboard
            </h2>
            <div class="text-white">
                <i class="far fa-clock me-1"></i>
                Último acesso: {{ date('d/m/Y H:i') }}
            </div>
        </div>

        <!-- Cards de Estatísticas -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-dark text-white border-primary h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <div class="col-9 text-end">
                                <div class="h3 mb-0">150</div>
                                <div class="text-primary">Total de Clientes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-dark text-white border-success h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-user-plus fa-3x text-success"></i>
                            </div>
                            <div class="col-9 text-end">
                                <div class="h3 mb-0">15</div>
                                <div class="text-success">Novos Clientes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-dark text-white border-info h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-chart-line fa-3x text-info"></i>
                            </div>
                            <div class="col-9 text-end">
                                <div class="h3 mb-0">85%</div>
                                <div class="text-info">Taxa de Retenção</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-dark text-white border-warning h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-star fa-3x text-warning"></i>
                            </div>
                            <div class="col-9 text-end">
                                <div class="h3 mb-0">4.8</div>
                                <div class="text-warning">Avaliação Média</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Atividades Recentes e Clientes Recentes -->
        <div class="row">
            <div class="col-xl-8 mb-4">
                <div class="card bg-dark text-white h-100">
                    <div class="card-header bg-dark border-secondary d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="fas fa-history me-2"></i>
                            Atividades Recentes
                        </h5>
                        <button class="btn btn-outline-light btn-sm">
                            Ver Todas
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="activity-item d-flex align-items-center mb-3">
                            <div class="bg-success rounded-circle p-2 me-3">
                                <i class="fas fa-user-plus text-white"></i>
                            </div>
                            <div>
                                <strong>Novo cliente cadastrado:</strong> João Silva
                                <div class="text-muted small">Há 2 horas atrás</div>
                            </div>
                        </div>
                        <div class="activity-item d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle p-2 me-3">
                                <i class="fas fa-edit text-white"></i>
                            </div>
                            <div>
                                <strong>Atualização de cadastro:</strong> Maria Santos
                                <div class="text-muted small">Há 4 horas atrás</div>
                            </div>
                        </div>
                        <div class="activity-item d-flex align-items-center">
                            <div class="bg-info rounded-circle p-2 me-3">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <strong>Contato realizado:</strong> Pedro Oliveira
                                <div class="text-muted small">Há 5 horas atrás</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <div class="card-header bg-dark border-secondary">
                        <h5 class="mb-0">
                            <i class="fas fa-user-clock me-2"></i>
                            Últimos Clientes
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="client-item d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle p-3 me-3">
                                <span class="h5 text-white mb-0">JS</span>
                            </div>
                            <div>
                                <div>João Silva</div>
                                <div class="text-muted small">São Paulo - SP</div>
                            </div>
                        </div>
                        <div class="client-item d-flex align-items-center mb-3">
                            <div class="bg-success rounded-circle p-3 me-3">
                                <span class="h5 text-white mb-0">MS</span>
                            </div>
                            <div>
                                <div>Maria Santos</div>
                                <div class="text-muted small">Rio de Janeiro - RJ</div>
                            </div>
                        </div>
                        <div class="client-item d-flex align-items-center">
                            <div class="bg-info rounded-circle p-3 me-3">
                                <span class="h5 text-white mb-0">PO</span>
                            </div>
                            <div>
                                <div>Pedro Oliveira</div>
                                <div class="text-muted small">Belo Horizonte - MG</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggle-btn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('collapsed');
            document.getElementById('content').classList.toggle('expanded');

            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-chevron-left')) {
                icon.classList.replace('fa-chevron-left', 'fa-chevron-right');
            } else {
                icon.classList.replace('fa-chevron-right', 'fa-chevron-left');
            }
        });
    </script>
@endsection
