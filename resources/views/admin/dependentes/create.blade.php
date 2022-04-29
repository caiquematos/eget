<!DOCTYPE html>
<html lang="en">


<!-- head -->
@include("admin.build.head", ['title'=>"CDI - Cartão de Vantagens"])
<!-- /head -->

<!-- style -->
<style>
    .btn-dependente {
        cursor: pointer;
        transition-duration: .2s;
    }

    .btn-dependente:hover {
        transform: scale(1.2);
        color:green;
    }

    .btn-dependente-minus:hover {
        color:red !important;
    }
</style>
<!-- /style -->

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
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><a href="{{route('admin.cliente.edit', $cliente->id)}}">Cliente</a></h2><h2><i class="fa fa-chevron-right mx-2"></i></h2><h2>Criar Dependente</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form id="form_criar_dependente" action="{{route('admin.dependente.store')}}" method="post" novalidate>
                                        @csrf
                                        <input type="hidden" name="id_usuario" value="{{$cliente->id}}">
                                        <span class="section">Informações Pessoais</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="13" value="{{ old('cpf') }}" data-mask="000.000.000-00" name="cpf" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome completo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" value="{{ old('nome') }}" data-validate-words="2" name="nome" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Data de nascimento<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="nascimento"  value="{{ old('nascimento') }}" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
												<select name="sexo" class="select2_single form-control" tabindex="-1" required='required'>
													<option></option>
													<option value=0>Feminino</option>
													<option value=1>Masculino</option>
													<option value=2>Outro</option>
												</select>
											</div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Parentesco<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
												<select name="parentesco" class="select2_single form-control" value="{{old('parentesco')}}" tabindex="-1" required='required'>
													<option></option>
                                                    <option value=0>Irmã(o)</option>
													<option value=1>Mãe</option>
													<option value=2>Pai</option>
													<option value=3>Filho(a)</option>
													<option value=4>Outro</option>
												</select>
											</div>
                                        </div>                            
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 offset-md-3">
                                                <button type='submit' class="btn btn-success">Adicionar</button>
                                            </div>
                                        </div>
                                    </form>

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
                    <a href="https://re9agencia.com.br/">Re9 Agência</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <!-- scripts -->
    @include("admin.build.scripts", [])
    <!-- /scripts -->
    <script src="{{url('admin/assets/js/chance.min.js')}}"></script>
    <script src="{{url('admin/vendors/validator/multifield.js')}}"></script>
    <script src="{{url('admin/vendors/validator/validator.js')}}"></script>

</body>

</html>
