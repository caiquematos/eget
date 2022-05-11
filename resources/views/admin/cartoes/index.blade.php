<!DOCTYPE html>
<html lang="en">
  <!-- funcoes -->
  @include("admin.build.funcoes")
 <!-- /funcoes -->

 <!-- head -->
 @include("admin.build.head", ['title'=>"CDI - Cartões de Vantagens"])
 <!-- /head -->

  <style>
    .pagamento-status {
      padding: 3px 5px;
      border-radius: 5px;
      font-weight: bold;
      font-size: smaller;
      width:69px;
      text-align: center;
    }
  </style>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
       
        <!-- side menu -->
        @include("admin.build.side-menu")
        <!-- /side menu -->

        <!-- top navigation -->
        @include("admin.build.top-navigation", [])
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Cartões de Vantagens</h3>
              </div>

              <div class="title_right">
                <a class="btn btn-primary pull-right text-white" href="{{url('admin/cliente/create')}}">Adicionar</a>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="{{route('admin.cliente.index')}}">Clientes</a></h2><h2><i class="fa fa-chevron-right mx-2"></i></h2><h2>{{$cliente->nome}}</h2>
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
                            <div class="card-box table-responsive">
                                <table id="datatable-cartoes" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th data-priority="1">id</th>
                                      <th data-priority="2">Status</th>
                                      <th>Data de Criação</th>
                                      <th>Ativo</th>
                                      <th data-priority="3">Ações</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                        @foreach ($cliente->cartoes as $cartao)
                                            <tr>
                                                <td>{{$cartao->id}}</td>
                                                <td>{{$cartao->status ?? "-"}}</td>
                                                <td>{{$cartao->created_at ?? "-"}}</td>
                                                <td>
                                                    <input type="checkbox" data-cartao-id={{$cartao->id}} onchange="toggleAtivacao(this)" class="js-switch" {{$cartao->ativo ? "checked" : ""}} />
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.cliente.show', [$cliente->id])}}"><i class="fa fa-eye mx-1" title="Ver"></i></a>
                                                    <a href="{{route('admin.cartao.index', [$cliente->id])}}"><i class="fa fa-credit-card mx-1" title="Cartões"></i></a>
                                                    <a href="{{route('admin.cliente.deletar', [$cliente->id])}}"><i class="fa fa-trash mx-1" title="Deletar"></i></a>
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
                    <h2>Dependentes</h2>
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
                            <div class="card-box table-responsive">
                                <table id="datatable-cartoes" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th data-priority="1">id</th>
                                      <th data-priority="2">Nome</th>
                                      <th data-priority="3">Status</th>
                                      <th>Data de Criação</th>
                                      <th>Ativo</th>
                                      <th data-priority="4">Ações</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($cliente->dependentes as $dependente)
                                      @foreach ($dependente->cartoes as $cartao)
                                        <tr>
                                            <td>{{$cartao->id}}</td>
                                            <td>{{$dependente->nome}}</td>
                                            <td>{{$cartao->status ?? "-"}}</td>
                                            <td>{{$cartao->created_at ?? "-"}}</td>
                                            <td>
                                                <input type="checkbox" data-cartao-id={{$cartao->id}} onchange="toggleAtivacao(this)" class="js-switch" {{$cartao->ativo ? "checked" : ""}} />
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                      @endforeach
                                    @endforeach
                                        {{-- @foreach ($cliente->dependentes->cartoes as $cartao)
                                            <tr>
                                                <td>{{$cartao->id}}</td>
                                                <td>{{$cartao->status ?? "-"}}</td>
                                                <td>{{$cartao->created_at ?? "-"}}</td>
                                                <td>
                                                    <input type="checkbox" data-cartao-id={{$cartao->id}} onchange="toggleAtivacao(this)" class="js-switch" {{$cartao->ativo ? "checked" : ""}} />
                                                </td>
                                                <td>

                                                </td>
                                            </tr>
                                        @endforeach --}}
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
            {{env('APP_NAME')}} <a href="https://re9agencia.com.br/">Re9 Agência</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- scripts -->
    @include("admin.build.scripts", [])
    @include("admin.build.datatables")
    <!-- /scripts -->
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <script>
    var dt = $("#datatable-clientes").DataTable({
        searchPanes: {
            viewTotal: true,
            columns: [6],
            layout: 'columns-1'
        },
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
        dom: 'Plfrtip',
        columnDefs: [
            {
                orderable: false,
                searchPanes: {
                    header: "Filtro por status do pagamento.",
                    show: true,
                },
                targets: [6]
            },
          ],
          select: {
              style:    'os',
              selector: 'td:first-child'
          },
      });

      
    dt.on('select.dt', () => {          
        dt.searchPanes.rebuildPane(0, true);
    });
 
    dt.on('deselect.dt', () => {
        dt.searchPanes.rebuildPane(0, true);
    });

    // Gerencia ativação do cliente.
    function toggleAtivacao(e) {
            var cliente_id = $(e).data("cliente-id");
            var status = $(e).is(":checked");
            var url = `{{route('admin.cliente.ativar')}}`;
            $.ajax({
                url: url,
                type: "POST",
                data: {'status':status, "_token": "{{ csrf_token() }}","cliente_id":cliente_id},
                dataType: "json",
                success: function (data) {
                    if (data.cliente) {
                        if(data.cliente.ativo) {
                            mensagem = "Cliente ativado com sucesso."
                        }
                        else {
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
                error: function (xhr, status) {
                    new PNotify({
                        title: 'Opa!',
                        text: "Não foi possível atualizar o status do cliente.",
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