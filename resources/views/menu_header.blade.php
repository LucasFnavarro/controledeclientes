<div id="sidebar">
    <div class="logo-container">
        <span class="menu-text">Controle Clientes</span>
        <span class="collapsed-text" style="display: none;">S</span>
    </div>
    <button id="toggle-btn">
        <i class="fas fa-chevron-left"></i>
    </button>
    <nav class="nav flex-column">
        <a href="{{ route('home') }}" class="nav-link active">
            <i class="fas fa-home fa-fw"></i>
            <span class="menu-text">Início</span>
        </a>
        <a href="{{ route('novoCliente') }}" class="nav-link">
            <i class="fas fa-user-plus fa-fw"></i>
            <span class="menu-text">Cadastrar Cliente</span>
        </a>
        <a href="#" class="nav-link">
            <i class="fas fa-users fa-fw"></i>
            <span class="menu-text">Ver Clientes</span>
        </a>
        <a href="{{ route('logout') }}" class="nav-link">
            <i class="fas fa-sign-out-alt fa-fw"></i>
            <span class="menu-text">Sair</span>
        </a>
    </nav>
</div>
