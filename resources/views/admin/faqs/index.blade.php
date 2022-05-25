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
                <h3></h3>
              </div>

              <div class="title_right">
                <a class="btn btn-primary pull-right text-white" href="{{route('admin.faq.create')}}">Adicionar</a>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Faqs</h2>
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

                    <table id="datatable-faqs" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Pergunta</th>
                          <th>Resposta</th>
                          <th>Ativo</th>
                          <th>Adicionada em</th>
                          <th>Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach ($faqs as $faq)
                                <tr>
                                    <td>{{$faq->id}}</td>
                                    <td>{{$faq->pergunta}}</td>
                                    <td>{!!$faq->resposta!!}</td>
                                    <td>
                                        <input type="checkbox" data-faq-id={{$faq->id}} onchange="toggleAtivacao(this)" class="js-switch" {{$faq->ativo ? "checked" : ""}} />
                                    </td>
                                    <td>{{date("d/m/Y", strtotime($faq->created_at))}}</td>
                                    <td>
                                        <a href="{{route('admin.faq.show', [$faq->id])}}"><i class="fa fa-eye mx-1" title="Ver"></i></a>
                                        {{-- <a href="{{route('admin.faq.deletar', [$faq->id])}}"><i class="fa fa-trash mx-1"></i></a> --}}
                                        <a href="#"><i class="fa fa-trash mx-1" title="Deletar" data-action="{{route("admin.faq.destroy", [0])}}" data-title="Deletar" data-content="Tem certeza que deseja deletar essa faq?" onclick="deletar({{$faq->id}}, this)"></i></a>
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

        var dt = $("#datatable-faqs").DataTable({
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json",
            },
        });

        // Gerencia ativação do faq.
        function toggleAtivacao(e) {
            var faq_id = $(e).data("faq-id");
            var status = $(e).is(":checked");
            var url = `{{route('admin.faq.ativar')}}`;
            $.ajax({
                url: url,
                type: "POST",
                data: {'status':status, "_token": "{{ csrf_token() }}","faq_id":faq_id},
                dataType: "json",
                success: function (data) {
                    if (data.faq) {
                        if(data.faq.ativo) {
                            mensagem = "Faq ativada com sucesso."
                        }
                        else {
                            mensagem = "Faq desativada com sucesso."
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
                        text: "Não foi possível atualizar o status da faq.",
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
