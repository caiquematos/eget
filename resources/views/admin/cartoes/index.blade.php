<!DOCTYPE html>
<html lang="en">
<!-- funcoes -->
@include('admin.build.funcoes')
<!-- /funcoes -->

<!-- head -->
@include('admin.build.head', ['title' => 'CDI - Cartões de Vantagens'])
<!-- /head -->

<style>
    .cartao-status {
        padding: 3px 5px;
        border-radius: 5px;
        font-weight: bold;
        font-size: smaller;
        width: fit-content;
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

            <!-- modais -->
            <style>
                #modal-cartao .modal-body .block {
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-end;
                }
            </style>
            <div id="modal-cartao" class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Imprimir Cartão</h5>
                            <a type="button" role="button" class="btn-close" data-dismiss="modal"
                                aria-label="Close"><i class="fa fa-times"></i></a>
                        </div>
                        <div class="modal-body">
                            <p>Obs.: Após clicar em imprimir, na página de impressão, selecionar <span
                                    style="background: #e7e7e7;
                                border-radius: 3px;
                                padding: 2px;">Disposição:
                                    Horizontal</span> e <span
                                    style="background: #e7e7e7;
                                    border-radius: 3px;
                                    padding: 2px;">Mais
                                    Definições > Margens: Nenhumas.</span></p>
                            <hr>
                            <p class="mb-1">Nome usuário: <b><span class="nome"></span></b></p>
                            <p class="mb-1">Matrícula: <b><span class="matricula"></span></b></p>
                            <p class="mb-1">Nascimento: <b><span class="nascimento"></span></b></p>
                            <div class="block"
                                style="width: 7.8cm;height:4.7cm;padding: 5px;padding-left:0.3cm;font-size: 10px;display: flex;flex-direction: column;justify-content: flex-end;">
                                <p class="nome"
                                    style="text-transform: uppercase;margin-bottom: .02cm;font-weight:900;font-family:Arial, Helvetica, sans-serif;">
                                    Maria Rosana</p>
                                <p class="matricula"
                                    style="margin-bottom: 0cm;font-weight:900; font-family:Arial, Helvetica, sans-serif">
                                    04682477504</p>
                                <p class="nascimento"
                                    style="margin-bottom:0px;font-weight:900; font-family:Arial, Helvetica, sans-serif">
                                    19/07/91</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" onclick="imprimir(this)">Imprimir</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /modais -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        {{-- <div class="title_left">
                <h3>Cartões de Vantagens</h3>
              </div>

              <div class="title_right">
                <a class="btn btn-primary pull-right text-white" href="{{url('admin/cartao/create')}}">Adicionar</a>
              </div> --}}
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><a href="{{ route('admin.cliente.index') }}">Clientes</a></h2>
                                    <h2><i class="fa fa-chevron-right mx-2"></i></h2>
                                    <h2>Cartões do(a) Titular <strong>{{ $cliente->nome }}</strong></h2>
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
                                            {{-- <p class="filtro active" class="ms-4"  style="margin-left: 1rem">Filtrar por Status <i class="fa fa-chevron-circle-up"></i></p>
                            <p class="filtro-subtitle">selecione uma ou mais opções</p> --}}
                                            <div class="card-box table-responsive">
                                                <table id="datatable-cartoes-titular"
                                                    class="table table-striped table-bordered dt-responsive nowrap"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th data-priority="1">ID</th>
                                                            <th data-priority="2">Nº da Sorte</th>
                                                            <th data-priority="3">Status</th>
                                                            <th>Data de Criação</th>
                                                            <th>Ativo</th>
                                                            <th data-priority="4">Ações</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($cliente->cartoes as $cartao)
                                                            <tr>
                                                                <td>{{ $cartao->id }}</td>
                                                                <td>{{ $cartao->codigo ?? '-' }}</td>
                                                                <td>{!! CARTAO_STATUS[$cartao->status] ?? '-' !!}</td>
                                                                <td>{{ $cartao->created_at ?? '-' }}</td>
                                                                <td>
                                                                    <input type="checkbox"
                                                                        data-cartao-id={{ $cartao->id }}
                                                                        onchange="toggleAtivacao(this)"
                                                                        class="js-switch"
                                                                        {{ $cartao->status == config('constants.STATUS_CARTAO.CANCELADO') ? 'disabled' : '' }}
                                                                        {{ $cartao->ativo ? 'checked' : '' }} />
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="{{ route('admin.cartao.show', [$cartao->id]) }}"><i
                                                                            class="fa fa-eye mx-1"
                                                                            title="Ver"></i></a>
                                                                    @if ($cartao->status != config('constants.STATUS_CARTAO.CANCELADO'))
                                                                        {{-- <a href="{{route('admin.cartao.store', [$cartao->id])}}"><i class="fa fa-plus-square mx-1" title="Gerar um novo cartão"></i></a> --}}
                                                                        <a href="#"><i
                                                                                class="fa fa-plus-square mx-1"
                                                                                title="Gerar Novo Cartão"
                                                                                data-action="{{ route('admin.cartao.store', [0]) }}"
                                                                                data-title="Gerar Novo Cartão"
                                                                                data-content="O cartão atual será cancelado e um novo cartão será gerado. Tem certeza que deseja gerar um novo cartão?"
                                                                                onclick="gerar({{ $cartao->id }}, this)"></i></a>
                                                                    @endif
                                                                    @if ($cartao->status == config('constants.STATUS_CARTAO.ANDAMENTO'))
                                                                        <a href="#"><i class="fa fa-print mx-1"
                                                                                data-cliente-nome="{{ $cliente->nome }}"
                                                                                data-cliente-matricula="{{ $cliente->cpf }}"
                                                                                data-cliente-nascimento="{{ $cliente->nascimento }}"
                                                                                title="Imprimir" data-title="Imprimir"
                                                                                data-content="O cartão atual será cancelado e um novo cartão será gerado. Tem certeza que deseja gerar um novo cartão?"
                                                                                onclick="prever_impressao(this)"></i></a>
                                                                    @endif
                                                                    {{-- <a href="{{route('admin.cartao.deletar', [$cartao->id])}}"><i class="fa fa-trash mx-1" title="Deletar"></i></a> --}}
                                                                    {{-- <a href="#"><i class="fa fa-trash mx-1" title="Deletar" data-action="{{route("admin.cartao.destroy", [0])}}" data-title="Deletar" data-content="Tem certeza que deseja deletar esse cartão?" onclick="deletar({{$cartao->id}}, this)"></i></a> --}}
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

                    <div class="row">

                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Cartões dos Dependentes</h2>
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
                            <p class="filtro-subtitle">selecione uma ou mais opções</p> --}}
                                            <div class="card-box table-responsive">
                                                <table id="datatable-cartoes-dependentes"
                                                    class="table table-striped table-bordered dt-responsive nowrap"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th data-priority="1">ID</th>
                                                            <th data-priority="2">Nº da Sorte</th>
                                                            <th data-priority="3">CPF</th>
                                                            <th data-priority="4">Nome</th>
                                                            <th data-priority="5">Status</th>
                                                            <th>Data de Criação</th>
                                                            <th>Ativo</th>
                                                            <th data-priority="6">Ações</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($cliente->dependentes as $dependente)
                                                            @foreach ($dependente->cartoes as $cartao)
                                                                <tr>
                                                                    <td>{{ $cartao->id }}</td>
                                                                    <td>{{ $cartao->codigo ?? '-' }}</td>
                                                                    <td>{!! "<span data-tipo='cpf'>$dependente->cpf</span>" !!}</td>
                                                                    <td>{{ $dependente->nome }}</td>
                                                                    <td>{!! CARTAO_STATUS[$cartao->status] ?? '-' !!}</td>
                                                                    <td>{{ $cartao->created_at ?? '-' }}</td>
                                                                    <td>
                                                                        <input type="checkbox"
                                                                            data-cartao-id={{ $cartao->id }}
                                                                            onchange="toggleAtivacao(this)"
                                                                            class="js-switch"
                                                                            {{ $cartao->status == config('constants.STATUS_CARTAO.CANCELADO') ? 'disabled' : '' }}
                                                                            {{ $cartao->ativo ? 'checked' : '' }} />
                                                                    </td>
                                                                    <td>
                                                                        <a
                                                                            href="{{ route('admin.cartao.show', [$cartao->id]) }}"><i
                                                                                class="fa fa-eye mx-1"
                                                                                title="Ver"></i></a>
                                                                        @if ($cartao->status != config('constants.STATUS_CARTAO.CANCELADO'))
                                                                            {{-- <a href="{{route('admin.cartao.store', [$cartao->id])}}"><i class="fa fa-plus-square mx-1" title="Gerar um novo cartão"></i></a> --}}
                                                                            <a href="#"><i
                                                                                    class="fa fa-plus-square mx-1"
                                                                                    title="Gerar Novo Cartão"
                                                                                    data-action="{{ route('admin.cartao.store', [0]) }}"
                                                                                    data-title="Gerar Novo Cartão"
                                                                                    data-content="O cartão atual será cancelado e um novo cartão será gerado. Tem certeza que deseja gerar um novo cartão?"
                                                                                    onclick="gerar({{ $cartao->id }}, this)"></i></a>
                                                                        @endif
                                                                        @if ($cartao->status == config('constants.STATUS_CARTAO.ANDAMENTO'))
                                                                            <a href="#"><i
                                                                                    class="fa fa-print mx-1"
                                                                                    data-cliente-nome="{{ $dependente->nome }}"
                                                                                    data-cliente-matricula="{{ $dependente->cpf }}"
                                                                                    data-cliente-nascimento="{{ $dependente->nascimento }}"
                                                                                    title="Imprimir"
                                                                                    data-title="Imprimir"
                                                                                    data-content="O cartão atual será cancelado e um novo cartão será gerado. Tem certeza que deseja gerar um novo cartão?"
                                                                                    onclick="prever_impressao(this)"></i></a>
                                                                        @endif
                                                                        {{-- <a href="{{route('admin.cartao.deletar', [$cartao->id])}}"><i class="fa fa-trash mx-1" title="Deletar"></i></a> --}}
                                                                        {{-- <a href="#"><i class="fa fa-trash mx-1" title="Deletar" data-action="{{route("admin.cartao.destroy", [0])}}" data-title="Deletar" data-content="Tem certeza que deseja deletar esse cartão?" onclick="deletar({{$cartao->id}}, this)"></i></a> --}}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
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

            <!-- Modal Global Deletar por ID -->
            <div id="modal-gera" class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Gerar Novo Cartão</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.cartao.store', 0) }}" method="PUT">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <p class="modal-text-content">O cartão atual será cancelado e um novo cartão será
                                    gerado. Tem certeza que deseja gerar um novo cartão?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Gerar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Modal Global Deletar por ID -->

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
            var dt = $("#datatable-cartoes-titular").DataTable({
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

            // dt.on('select.dt', () => {
            //     dt.searchPanes.rebuildPane(0, true);
            // });

            // dt.on('deselect.dt', () => {
            //     dt.searchPanes.rebuildPane(0, true);
            // });

            var dt2 = $("#datatable-cartoes-dependentes").DataTable({
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

            // dt2.on('select.dt', () => {
            //     console.log("selecionado");
            //     dt2.searchPanes.rebuildPane(0, true);
            // });

            // dt2.on('deselect.dt', () => {
            //     dt2.searchPanes.rebuildPane(0, true);
            // });

            // init_filtro();

        });

        // Gerencia ativação do cartao.
        function toggleAtivacao(e) {
            var cartao_id = $(e).data("cartao-id");
            var status = $(e).is(":checked");
            var url = `{{ route('admin.cartao.ativar') }}`;
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    'status': status,
                    "_token": "{{ csrf_token() }}",
                    "cartao_id": cartao_id
                },
                dataType: "json",
                success: function(data) {
                    if (data.cartao) {
                        if (data.cartao.ativo) {
                            mensagem = "Cartão ativado com sucesso."
                        } else {
                            mensagem = "Cartão desativado com sucesso."
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
                        text: "Não foi possível atualizar o status do cartao.",
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                    console.log("ativação falhou.");
                }
            });
        }

        /**
         * Função utilizada para chamar o modal gerar novo cartao.
         */
        function gerar(id, e) {
            let modal = $("#modal-gera");
            let form = $("#modal-gera form")
            let title = $("#modal-gera .modal-title");
            let content = $("#modal-gera .modal-text-content");
            let action = $(e).data("action");
            title.text($(e).data("title"));
            content.text($(e).data("content"));
            form.attr("action", action.slice(-0, -1) + id);
            modal.modal("show");
        }

        var modal_html = "",
            modal_html_serialized = "";

        function prever_impressao(e) {
            let modal = $("#modal-cartao");
            $("#modal-cartao .modal-body .nome").text($(e).data("cliente-nome"));
            $("#modal-cartao .modal-body .matricula").text($(e).data("cliente-matricula"));
            $("#modal-cartao .modal-body .nascimento").text($(e).data("cliente-nascimento"));
            $("#modal-cartao").modal("show");
            $("#modal-cartao .modal-body .block").show();
            modal_html = document.querySelector("#modal-cartao .modal-body .block");
            modal_html_serialized = new XMLSerializer().serializeToString(modal_html);
            // console.log("modal", modal_html);
            $("#modal-cartao .modal-body .block").hide();
            // console.log("modal", modal_html);
        }

        function imprimir() {
            // let data = document.querySelector("#modal-cartao .modal-body .block");
            console.log(modal_html.innerHtml);
            let html = "<html>";
            html +=
                "<style>@media print {@page {margin - top: 0;margin - bottom: 0;} body {padding-top: 0px;padding-bottom: 0px ;}}</style>";
            html += modal_html_serialized;
            html += "</html>";
            console.log(html);
            var printWin = window.open('', '', 'left=0,top =0,width=1400,height=700,toolbar=0,scrollbars=0,status  =0');
            printWin.document.write(html);
            printWin.document.close();
            printWin.focus();
            printWin.print();
            printWin.close();
            return true;
        }
    </script>

    <script></script>


</body>

</html>
