<!DOCTYPE html>
<html lang="en">

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
                                    <h2>Atualizar Cliente</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form id="form_atualizar_cliente"
                                        action="{{ route('admin.cliente.update', $cliente->id) }}" method="post"
                                        novalidate>
                                        @csrf
                                        @method('PUT')
                                        <span class="section">Informações Pessoais</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome
                                                completo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"
                                                    value="{{ $cliente->nome }}" data-validate-words="2" name="nome"
                                                    required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="13"
                                                    value="{{ $cliente->cpf }}" data-mask="000.000.000-00"
                                                    name="cpf" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label
                                                class="col-form-label col-md-3 col-sm-3  label-align">Categoria</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="categoria"
                                                    value="{{ $cliente->categoria }}" class='categoria'
                                                    type="text" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label
                                                class="col-form-label col-md-3 col-sm-3  label-align">Telefone</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='tel' name="celular"
                                                    value="{{ $cliente->celular }}" data-mask="(00) 0 0000-0000" />
                                            </div>
                                        </div>
                                        <span class="section">Endereço</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CEP<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="cep"
                                                    data-validate-length-range="9" data-mask="00000-000" name="cep"
                                                    value="{{ $cliente->cep }}" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Rua</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="endereco"
                                                    data-validate-length-range="3,50" name="endereco"
                                                    value="{{ $cliente->endereco }}" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Bairro</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-tipo="bairro" name="bairro"
                                                    value="{{ $cliente->bairro }}" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Cidade</label>
                                            <div class="col-md-3 col-sm-12 ">
                                                <input name="cidade" data-tipo="cidade" value="{{ $cliente->cidade }}"
                                                    class="select2_single form-control" tabindex="-1" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">UF</label>
                                            <div class="col-md-3 col-sm-12 ">
                                                <input name="estado" data-tipo="estado"
                                                    value="{{ $cliente->estado }}" placeholder="Ex.: BA, PE..."
                                                    data-validate-length-range="0,2"
                                                    class="select2_single form-control" tabindex="-1" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label
                                                class="col-form-label col-md-3 col-sm-3  label-align">Complemento</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="0,50"
                                                    name="complemento" value="{{ $cliente->complemento }}" />
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 offset-md-3">
                                                <button type='submit' class="btn btn-success">Atualizar</button>
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
    @include('admin.build.modais')
    @include('admin.build.datatables')
    <!-- /scripts -->
    <script src="{{ url('admin/assets/js/chance.min.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/multifield.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/validator.js') }}"></script>

    <!-- Verifica se cliente foi atualizado -->
    @if (isset($cliente->atualizado))
        <script>
            console.log("has success");
            new PNotify({
                title: 'Sucesso',
                text: "Cliente atualizado com sucesso.",
                type: 'success',
                styling: 'bootstrap3'
            });
        </script>
    @endif

    <!-- Javascript functions	-->
    <script>
        var cliente = @json($cliente, JSON_PRETTY_PRINT);
    </script>

    <script>
        $(function() {
            $("select[name=estado]").val(cliente.estado).change();
            $("select[name=cidade]").val(cliente.cidade).change();
        });
    </script>

</body>

</html>
