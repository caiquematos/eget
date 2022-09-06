<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('admin.build.head', ['title' => env('APP_NAME')])
<!-- /head -->

<style>
    .button-wrapper {
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    button {
        border: 1px solid #cccccc;
        font-weight: 500;
        color: white !important;
        background: linear-gradient(45deg, #2ec3f2, #0081a8);
    }

    .login_wrapper {
        max-width: 700px;
    }

    .form-group label {
        color: #6c757d;
        text-transform: uppercase;
        font-weight: 600;
    }

    button[type='submit'] {
        width: 330px;
        margin: auto;
    }

    input[type='password'] {
        margin-bottom: 0px !important;
    }
</style>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" action="{{ route('admin.cadastrar') }}">
                        @csrf

                        <h1>Gerenciar Clientes</h1>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nome
                                completo<span class="required">*</span>:</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="4" value="{{ old('nome') }}"
                                    data-validate-words="2" name="nome" required="required" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">CPF<span
                                    class="required">*</span>:</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="14" data-tipo="cpf"
                                    value="{{ old('cpf') }}" name="cpf" required="required" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span
                                    class="required">*</span>:</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ old('email') }}" data-tipo="email" name="email"
                                    required="required" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Senha<span
                                    class="required">*</span>:</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="password" data-tipo="passoword" name="senha"
                                    autocomplete="new-password" data-validate-length-range="6" required="required" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Confirmar senha<span
                                    class="required">*</span>:</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="password" data-tipo="passoword"
                                    name="senha_confirmation" autocomplete="new-password" data-validate-length-range="6"
                                    required="required" />
                            </div>
                        </div>
                        <div class="button-wrapper">
                            <button type="submit" class="btn btn-default">Cadastrar</button>
                            <a href="{{ route('admin.login') }}">Entrar</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><img src="{{ url('logo.png') }}" width="100" alt="CDI - Cartão de Vantages"
                                        style="margin-right: 8px;"> {{ env('APP_NAME') }}</h1>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <!-- scripts -->
    @include('admin.build.scripts')
    <!-- /scripts -->

    <script src="{{ url('admin/assets/js/chance.min.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/multifield.js') }}"></script>
    <script src="{{ url('admin/vendors/validator/validator.js') }}"></script>

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
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
    </script>
</body>

</html>
