<!DOCTYPE html>
<html lang="en">

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
                                href="{{ route('admin.cliente.create') }}"><i class="fa fa-users"
                                    style="
                                margin-right: .3rem;
                            "></i>
                                Adicionar
                                cliente</a>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Clientes</h2>
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
                                            {{-- <p class="filtro active" class="ms-4"  style="margin-left: 1rem">Filtrar por Pagamento <i class="fa fa-chevron-circle-up"></i></p>
                                <p class="filtro-subtitle">selecione uma ou mais op????es</p> --}}
                                            <div class="card-box table-responsive">

                                                <table id="datatable-clientes"
                                                    class="table table-striped table-bordered dt-responsive nowrap"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th data-priority="1">Nome</th>
                                                            <th class="cpf" data-priority="3">CPF</th>
                                                            <th>Categoria</th>
                                                            <th>Celular</th>
                                                            <th data-priority="6">Ativo</th>
                                                            <th data-priority="5">A????es</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($clientes as $cliente)
                                                            <tr>
                                                                <td>{{ $cliente->nome ?? '-' }}</td>
                                                                <td>{!! "<span data-tipo='cpf'>$cliente->cpf</span>" !!}</td>
                                                                <td>{{ $cliente->categoria ?? '-' }}</td>
                                                                <td>{!! !empty($cliente->celular) ? "<span data-tipo='celular'>$cliente->celular</span>" : '-' !!}</td>
                                                                <td>
                                                                    <input type="checkbox"
                                                                        data-cliente-id={{ $cliente->id }}
                                                                        onchange="toggleAtivacao(this)"
                                                                        class="js-switch"
                                                                        {{ $cliente->ativo ? 'checked' : '' }} />
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="{{ route('admin.cliente.show', [$cliente->id]) }}"><i
                                                                            class="fa fa-eye mx-1"
                                                                            title="Ver/Editar"></i></a>
                                                                    <a href="#"><i class="fa fa-trash mx-1"
                                                                            title="Deletar"
                                                                            data-action="{{ route('admin.cliente.destroy', [$cliente->id]) }}"
                                                                            data-title="Deletar"
                                                                            data-content="Tem certeza que deseja deletar esse cliente?"
                                                                            onclick="deletar(this)"></i></a>
                                                                </td>
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
            @include('admin.build.footer')
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
        var dt = $("#datatable-clientes").DataTable({
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

        // Gerencia ativa????o do cliente.
        function toggleAtivacao(e) {
            var cliente_id = $(e).data("cliente-id");
            var status = $(e).is(":checked");
            var url = `{{ route('admin.cliente.ativar') }}`;
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    'status': status,
                    "_token": "{{ csrf_token() }}",
                    "cliente_id": cliente_id
                },
                dataType: "json",
                success: function(data) {
                    if (data.cliente) {
                        if (data.cliente.ativo) {
                            mensagem = "Cliente ativado com sucesso."
                        } else {
                            mensagem = "Cliente desativado com sucesso."
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
                        text: "N??o foi poss??vel atualizar o status do cliente.",
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                    console.log("ativa????o falhou.");
                }
            });
        }
    </script>


</body>

</html>
