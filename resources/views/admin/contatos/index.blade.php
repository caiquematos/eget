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
                <h3></h3>
              </div>

              <div class="title_right">
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mensagens Recebidas</h2>
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
                                <table id="datatable-contatos" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                        <th data-priority="1">E-mail</th>
                                        <th data-priority="3">Assunto</th>
                                        <th  data-priority="2">Mensagem</th>
                                        <th data-priority="4">Lida</th>
                                        <th data-priority="5">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($contatos as $contato)
                                                <tr>
                                                    <td>{{$contato->email}}</td>
                                                    <td>{{$contato->assunto}}</td>
                                                    <td>{{$contato->mensagem}}</td>
                                                    <td>
                                                        <input type="checkbox" data-contato-id={{$contato->id}} onchange="toggleAtivacao(this)" class="js-switch" {{$contato->lida ? "checked" : ""}} />
                                                    </td>
                                                    <td>
                                                        {{-- <a href="{{route('admin.contato.deletar', [$contato->id])}}"><i class="fa fa-trash mx-1"></i></a> --}}
                                                        <a href="#"><i class="fa fa-trash mx-1" title="Deletar" data-action="{{route("admin.contato.destroy", [0])}}" data-title="Deletar" data-content="Tem certeza que deseja deletar essa mensagem?" onclick="deletar({{$contato->id}}, this)"></i></a>
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
    @include('admin.build.modais')
    @include("admin.build.datatables")
    <!-- /scripts -->
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <script>
        var dt = $("#datatable-contatos").DataTable({
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json",
            },
        });

        // Gerencia ativação do contato.
        function toggleAtivacao(e) {
            var contato_id = $(e).data("contato-id");
            var status = $(e).is(":checked");
            var url = `{{route('admin.contato.ativar')}}`;
            $.ajax({
                url: url,
                type: "POST",
                data: {'status':status, "_token": "{{ csrf_token() }}","contato_id":contato_id},
                dataType: "json",
                success: function (data) {
                    if (data.contato) {
                        if(data.contato.lida) {
                            mensagem = "Mensagem marcada como lida com sucesso."
                        }
                        else {
                            mensagem = "Mensagem marcada como não lida com sucesso."
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
                        text: "Não foi possível atualizar o status do contato.",
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
