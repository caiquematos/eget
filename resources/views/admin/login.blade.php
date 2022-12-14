<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('admin.build.head', ['title' => 'CDI - Cartão de Vantagens | '])
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
</style>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" action="{{ route('admin.logar') }}">
                        @csrf

                        <h1>Gerenciar Clientes</h1>
                        <div>
                            <input type="text" class="form-control" data-tipo="cpf" name="cpf"
                                placeholder="000.000.000-00
                " required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="" />
                        </div>
                        <div class="button-wrapper">
                            <button type="submit" class="btn btn-default">Entrar</button>
                            <a href="{{ route('admin.cadastrar') }}">Criar conta</a>
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
</body>

</html>
