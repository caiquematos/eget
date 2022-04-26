<!DOCTYPE html>
<html lang="en">
 <!-- head -->
 @include("admin.build.head", ['title'=>"CDI - Cartões de Vantagens"])
 <!-- /head -->

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
                <h3>Clientes <small>usuários clientes</small></h3>
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
                    <h2>Clientes <small>usuários clientes</small></h2>
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
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th data-priority="1">Nome</th>
                          <th data-priority="2">E-mail</th>
                          <th data-priority="3">CPF</th>
                          {{-- <th>Região</th>
                          <th>Assinatura</th> --}}
                          <th>Data de Nascimento</th>
                          <th>Sexo</th>
                          <th>Estado Civil</th>
                          <th>Celular</th>
                          <th>Telefone</th>
                          <th>Local de Retirada</th>
                          <th>Como Conheceu?</th>
                          <th>Renda</th>
                          <th>Profissão</th>
                          {{-- <th>Animal</th> --}}
                          <th>Ofertas</th>
                          <th data-priority="4">Pagamento</th>
                          <th data-priority="6">Ativo</th>
                          <th data-priority="5">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->cpf}}</td>
                                    {{-- <td>{{$cliente->regiao}}</td>
                                    <td>{{$cliente->assinatura}}</td> --}}
                                    <td>{{$cliente->nascimento}}</td>
                                    <td>{{$cliente->sexo}}</td>
                                    <td>{{$cliente->estado_civil}}</td>
                                    <td>{{$cliente->celular}}</td>
                                    <td>{{$cliente->telefone}}</td>
                                    <td>{{$cliente->local_retirada}}</td>
                                    <td>{{$cliente->como_conheceu}}</td>
                                    <td>{{$cliente->renda}}</td>
                                    <td>{{$cliente->profissao}}</td>
                                    {{-- <td>{{$cliente->animal}}</td> --}}
                                    <td>{{$cliente->ofertas}}</td>
                                    <td>{{$cliente->status ?? "1"}}</td>
                                    <td>{{$cliente->ativo}}</td>
                                    <td>
                                        <a target="_blank" href="{{route('admin.cliente.show', [$cliente->id])}}"><i class="fa fa-eye"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-trash"></i></a>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- scripts -->
    @include("admin.build.scripts", [])
    <!-- /scripts -->
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

  </body>
</html>