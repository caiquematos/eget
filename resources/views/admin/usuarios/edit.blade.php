<!DOCTYPE html>
<html lang="en">

<!-- head -->
@include('admin.build.head', ['title' => 'CDI - Cartão de Vantagens'])
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
                                    <h2><a href="{{ route('admin.usuario.index') }}">Usuários</a></h2>
                                    <h2><i class="fa fa-chevron-right mx-2"></i></h2>
                                    <h2>Atualizar Usuário</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form id="form_add_cliente"
                                        action="{{ route('admin.usuario.update', $usuario->id) }}" method="post"
                                        novalidate>
                                        @csrf
                                        @method('PUT')
                                        <span class="section">Informações Pessoais</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome
                                                completo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"
                                                    value="{{ $usuario->nome }}" data-validate-words="2"
                                                    name="nome" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="13"
                                                    value="{{ $usuario->cpf }}" data-mask="000.000.000-00"
                                                    name="cpf" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">E-mail<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="email"
                                                    value="{{ $usuario->email }}" class='email' required="required"
                                                    type="email" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Função<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-12  ">
                                                <select name="tipo" class="select2_single form-control"
                                                    tabindex="-1" required>
                                                    @foreach ($roles as $role)
                                                        <option value={{ $role->id }}>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Data de
                                                nascimento</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date"
                                                    name="nascimento" value="{{ $usuario->nascimento }}">
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo</label>
                                            <div class="col-md-6 col-sm-12  ">
                                                <select name="sexo" class="select2_single form-control"
                                                    tabindex="-1">
                                                    <option></option>
                                                    <option value=0>Feminino</option>
                                                    <option value=1>Masculino</option>
                                                    <option value=2>Outro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Celular<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='tel' name="celular"
                                                    value="{{ $usuario->celular }}" data-mask="(00) 0 0000-0000"
                                                    required />
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
    @include('admin.build.scripts', [])
    <!-- /scripts -->
    <script src="{{ url('admin/assets/js/chance.min.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/multifield.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/validator.js') }}"></script>


    <!-- Javascript functions	-->
    <script>
        var usuario = @json($usuario, JSON_PRETTY_PRINT);
    </script>

    <script>
        $(function() {
            console.log("usuario", usuario);
            $("input[name=nascimento]").val(date_pt_en(usuario.nascimento)).change();
            $("select[name=sexo]").val(usuario.sexo).change();
            $("select[name=tipo]").val(usuario.tipo).change();
        });

        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>


</body>

</html>
