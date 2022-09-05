<!DOCTYPE html>
<html lang="en">
<!-- funcoes -->
@include('admin.build.funcoes')
<!-- /funcoes -->

<!-- head -->
@include('admin.build.head', ['title' => env('APP_NAME')])
<!-- /head -->

<style>
    .pagamento-status {
        padding: 3px 5px;
        border-radius: 5px;
        font-weight: bold;
        font-size: smaller;
        width: 69px;
        text-align: center;
    }

    .role-label {
        border-radius: 3px;
        background-color: #007bff;
        color: white;
        padding: 3px;
    }
</style>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">


            <!-- side menu -->
            @include('admin.build.side-menu')
            <!-- /side menu -->

            <!-- top navigation -->
            @include('admin.build.top-navigation', [])
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3></h3>
                        </div>

                        <div class="title_right">
                            <a class="btn btn-primary pull-right text-white"
                                href="{{ route('admin.usuario.create') }}"><i class="fa fa-user"
                                    style="
                                margin-right: .3rem;
                            "></i>
                                Adicionar
                                usuário</a>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Usuários</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            {{-- <p class="filtro active" class="ms-4"  style="margin-left: 1rem">Filtrar por Funções <i class="fa fa-chevron-circle-up"></i></p>
                            <p class="filtro-subtitle">selecione uma ou mais opções</p> --}}
                                            <div class="card-box table-responsive">
                                                <table id="datatable-usuarios"
                                                    class="table table-striped table-bordered dt-responsive nowrap"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th data-priority="1">Nome</th>
                                                            <th data-priority="2">E-mail</th>
                                                            <th class="cpf" data-priority="3">CPF</th>
                                                            <th>Celular</th>
                                                            <th>Funções</th>
                                                            <th data-priority="6">Ativo</th>
                                                            <th data-priority="5">Ações</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($usuarios as $usuario)
                                                            <tr>
                                                                <td>{{ $usuario->nome }}</td>
                                                                <td>{{ $usuario->email ?? '-' }}</td>
                                                                <td>{!! "<span data-tipo='cpf'>$usuario->cpf</span>" !!}</td>
                                                                <td>{!! "<span data-tipo='celular'>$usuario->celular</span>" !!}</td>
                                                                <td>
                                                                    @if ($usuario->roles->count())
                                                                        @foreach ($usuario->roles as $role)
                                                                            <p><span
                                                                                    class="role-label">{{ $role->name }}</span>
                                                                            </p>
                                                                        @endforeach
                                                                    @else
                                                                        <p><span class="role-label">usuário</span></p>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input type="checkbox"
                                                                        data-usuario-id={{ $usuario->id }}
                                                                        onchange="toggleAtivacao(this)"
                                                                        class="js-switch"
                                                                        {{ $usuario->ativo ? 'checked' : '' }} />
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="{{ route('admin.usuario.show', [$usuario->id]) }}"><i
                                                                            class="fa fa-eye mx-1"
                                                                            title="Ver"></i></a>
                                                                    <a href="#"><i class="fa fa-trash mx-1"
                                                                            title="Deletar"
                                                                            data-action="{{ route('admin.usuario.destroy', [$usuario->id]) }}"
                                                                            data-title="Deletar"
                                                                            data-content="Tem certeza que deseja deletar esse usuário?"
                                                                            onclick="deletar(this)"></i></a>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    {{ env('APP_NAME') }} <a href="https://re9agencia.com.br/">Re9 Agência</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- scripts -->
    @include('admin.build.scripts', [])
    @include('admin.build.modais')
    @include('admin.build.datatables')
    <!-- /scripts -->
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <script>
        $(function() {
            // $("#modal-delete").modal('show');
            var dt = $("#datatable-usuarios").DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json",
                    searchPanes: {
                        title: {
                            _: 'Filtros Selecionados - %d',
                            0: 'Nenhum Filtro Selecionado',
                            1: 'Um Filtro Selecionado'
                        },
                        count: '{total} encontrado',
                        countFiltered: '{shown} ({total})'
                    }
                },
            });
        });

        // Gerencia ativação do cliente.
        function toggleAtivacao(e) {
            var usuario_id = $(e).data("usuario-id");
            var status = $(e).is(":checked");
            var url = `{{ route('admin.usuario.ativar') }}`;
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    'status': status,
                    "_token": "{{ csrf_token() }}",
                    "usuario_id": usuario_id
                },
                dataType: "json",
                success: function(data) {
                    if (data.usuario) {
                        if (data.usuario.ativo) {
                            mensagem = "Usuário ativado com sucesso."
                        } else {
                            mensagem = "Usuário desativado com sucesso."
                        }

                        new PNotify({
                            title: 'Sucesso',
                            text: mensagem,
                            type: 'success',
                            styling: 'bootstrap3'
                        });
                    }
                },
                error: function(xhr, status) {
                    new PNotify({
                        title: 'Opa!',
                        text: "Não foi possível atualizar o status do usuario.",
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                    console.log("ativação falhou.");
                }
            });
        }
    </script>


</body>

</html>
