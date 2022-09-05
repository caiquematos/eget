<!DOCTYPE html>
<html lang="en">

<!-- funcoes -->
@include('admin.build.funcoes')
<!-- /funcoes -->

<!-- head -->
@include('admin.build.head', ['title' => env('APP_NAME')])
<!-- /head -->

<!-- style -->
<style>
    .btn-dependente {
        cursor: pointer;
        transition-duration: .2s;
    }

    .btn-dependente:hover {
        transform: scale(1.2);
        color: green;
    }

    .btn-dependente-minus:hover {
        color: red !important;
    }
</style>
<!-- /style -->

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
                            {{-- <h3>Adicionar Cliente</h3> --}}
                        </div>

                        <div class="title_right">
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><a href="{{ route('admin.cliente.index') }}">Clientes</a></h2>
                                    <h2><i class="fa fa-chevron-right mx-2"></i></h2>
                                    <h2>Adicionar Cliente</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form id="form_add_cliente" action="{{ route('admin.cliente.store') }}"
                                        method="post" novalidate>
                                        @csrf
                                        <span class="section">Informações Pessoais</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome
                                                completo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"
                                                    value="{{ old('nome') }}" data-validate-words="2" name="nome"
                                                    required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="14"
                                                    value="{{ old('cpf') }}" data-mask="000.000.000-00"
                                                    name="cpf" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label
                                                class="col-form-label col-md-3 col-sm-3  label-align">Categoria</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="categoria"
                                                    value="{{ old('categoria') }}" class='categoria' type="text" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label
                                                class="col-form-label col-md-3 col-sm-3  label-align">Telefone</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='tel' name="celular"
                                                    value="{{ old('celular') }}" data-validate-length-range="16"
                                                    data-mask="(00) 0 0000-0000" />
                                            </div>
                                        </div>
                                        <span class="section">Endereço</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CEP<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="9"
                                                    data-tipo="cep" data-mask="00000-000" name="cep"
                                                    value="{{ old('cep') }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Rua</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="endereco"
                                                    data-validate-length-range="3,50" name="endereco"
                                                    value="{{ old('endereco') }}" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bairro</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="bairro" name="bairro"
                                                    value="{{ old('bairro') }}" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Cidade</label>
                                            <div class="col-md-3 col-sm-12 ">
                                                <input name="cidade" data-tipo="cidade" value="{{ old('cidade') }}"
                                                    class="select2_single form-control" tabindex="-1" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">UF</label>
                                            <div class="col-md-3 col-sm-12 ">
                                                <input name="estado" data-tipo="estado"
                                                    data-validate-length-range="0,2" value="{{ old('estado') }}"
                                                    placeholder="Ex.: BA, RS, PE..."
                                                    class="select2_single form-control" tabindex="-1" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label
                                                class="col-form-label col-md-3 col-sm-3  label-align">Complemento</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="0,50"
                                                    name="complemento" value="{{ old('complemento') }}" />
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 offset-md-3">
                                                <button type='submit' class="btn btn-success">Cadastrar</button>
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
            @include('admin.build.footer')
            <!-- /footer content -->
        </div>
    </div>


    <!-- scripts -->
    @include('admin.build.scripts', [])
    <!-- /scripts -->
    <script src="{{ url('admin/assets/js/chance.min.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/multifield.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/validator.js') }}"></script>


    <!-- Javascript functions	-->
    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change'],
        }, document.forms[0]);

        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log("validatorResult", validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>


</body>

</html>
