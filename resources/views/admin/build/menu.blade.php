<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Geral</h3>
        <ul class="nav side-menu">
            {{-- <li><a><i class="fa fa-user"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('admin.usuario.index') }}">Listar</a></li>
                    <li><a href="{{ route('admin.usuario.create') }}">Adicionar</a></li>
                </ul>
            </li> --}}
            <li><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('admin.cliente.index') }}">Listar</a></li>
                    <li><a href="{{ route('admin.cliente.create') }}">Adicionar</a></li>
                </ul>
            </li>
    </div>
</div>
