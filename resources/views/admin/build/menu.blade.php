<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>Geral</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-user"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{url('admin/usuario')}}">Listar</a></li>
            <li><a href="{{url('admin/usuario/create')}}">Adicionar</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{url('admin/cliente')}}">Listar</a></li>
            <li><a href="{{url('admin/cliente/create')}}">Adicionar</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-question-circle"></i> Faqs <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{url('admin/faq')}}">Listar</a></li>
            <li><a href="{{url('admin/faq/create')}}">Adicionar</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-phone"></i> Contatos <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{url('admin/contato')}}">Listar</a></li>
            </ul>
        </li>
    </div>
  </div>
