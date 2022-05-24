<!DOCTYPE html>
<!-- saved from url=(0072)http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements# -->
<html lang="en">

<!-- funcoes -->
@include("public.funcoes")
<!-- /funcoes -->
<!-- head -->
@include('public.head')
<!-- /head -->


<style>

    @media (max-width: 1400px) {

    }

    html {
        scroll-behavior: smooth !important;
    }

    h1 {
        padding: 0;
        margin: 0;
        line-height: 0;
    }

    .slicknav_nav .nav-link {
        color: #367e8c;
    }

    .slicknav_nav .nav-link:hover {
        color: #4bc192 !important;
    }
    .slicknav_nav .active {
        color: #4bc192 !important;
    }


    .dtr-menu-dark .nav-link {
        color: #367e8c;
    }
    .dtr-menu-dark .nav-link:hover {
        color: #4bc192 !important;
    }
    .dtr-menu-dark .active {
        color: #4bc192 !important;
    }

    #dtr-header-global {
        background-color: white;
    }


    .dtr-btn {
        background-color: #1c4048 !important;
        border-color: #33485c00 !important;
        color: #fff;
    }

    #section-3 {
        background-image: url("{{url('template/assets/img/fundo-03.webp')}}");
        margin-top: 102px;
        height: 295px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
    }

    #section-3 a {
        margin: 0;
        width: fit-content;
    }

    #section-3 .dtr-btn-text {
        font-size: 29px !important;
    }

    .faixa-1 {
        height: 5px;
        width: 80px;
        background-color: #367e8c;
    }
    .faixa-2 {
        height: 5px;
        width: 80px;
        background-color: #4bc192;
    }


    .bg-my-green {
        background-color: #4bc192 !important;
    }

    .bg-my-light-green {
        background-color: #97cdb8 !important;
    }

    .bg-my-blue {
        background-color: #5db0c1 !important;
    }

    .bg-my-light-blue {
        background-color: #92c5d2 !important;
    }

    textarea[type="text"] {
        background-color: #f7f8f8;
        border-color: #f7f8f8;
        border-radius: 32px;
        padding: 32px;
    }
    button[type="submit"] {
        background-color: #4bc192;
        border-color: #4bc192;
        color: #fff;
        font-size: 18px;
        line-height: 0px;
        padding: 18px 30px;
    }
    .btn-primary:hover, .btn-primary:focus , .btn-primary:active  {
        background-color: #367e8c;
        border-color: #367e8c;
    }

    #dtr-footer a:hover {
        color: #4bc192;
    }

    .dtr-list-line.line-accent li::before {
        background-color: #4bc192;
    }

    @media (max-width: 576px) {

        .mx-sm-auto {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .w-sm-100 {
            width: 100% !important;
        }

        h2 {
            font-size: 34px !important;
        }

        #section-3 .dtr-btn-text {
            font-size: 20px !important;
        }

    }

    #services {
        background-image:url("{{url('template/assets/img/banner-02.webp')}}");
        margin-top: 85px;
        height: 600px;
        display: flex;
    }

    /* Style da página add clientes */
    select, textarea, input[type="text"], input[type="date"], input[type="email"], input[type="url"], input[type="password"], input[type="number"], input[type="tel"], input[type="search"]
    {
        background-color: #e9e9e9 !important;
    }

    .StepTitle {
        color: #525252;
    }

    #btn_add_dependente .btn-success, .dependente .btn-success {
        font-size: small !important;
        color: #fff !important;
        background-color: #3d88f8 !important;
        border-color: #3d88f8 !important;
    }

    #btn_add_dependente .btn-success:hover, .dependente .btn-success:hover {
        color: #fff !important;
        background-color: #0d6efd !important;
        border-color: #0d6efd !important;
    }

    #btn_add_dependente .btn-danger, .dependente .btn-danger {
        font-size: small !important;
    }

    .form_wizard .stepContainer {
        height: auto !important;
    }

    .buttonNext, .buttonPrevious {
        display: none !important;
    }

    .next, .cadastrar, .buttonNext {
        color: #fff;
        background-color: #367e8c !important;
        border-color: #367e8c !important;
    }

    .next:hover, .cadastrar:hover, .buttonNext:hover {
        color: #fff;
        background-color: #169F85 !important;
        border-color: #169F85 !important;
    }

    .cadastrar {
        color: #fff;
        background-color: #169F85 !important;
        border-color: #169F85 !important;
    }

    .cadastrar:hover {
        color: #fff;
        background-color: #367e8c !important;
        border-color: #367e8c !important;
    }

    .prev, .buttonPrevious  {
        color: #fff;
        background-color: #34495E !important;
        border-color: #34495E !important;
    }

    .prev:hover, .buttonPrevious:hover {
        color: #fff;
        background-color: #243241 !important;
        border-color: #243241 !important;
    }

    input:-webkit-autofill, input:-webkit-autofill:hover, input:-webkit-autofill:focus, textarea:-webkit-autofill, textarea:-webkit-autofill:hover, textarea:-webkit-autofill:focus, select:-webkit-autofill, select:-webkit-autofill:hover, select:-webkit-autofill:focus {
        border-color: #169F85 !important;
        -webkit-text-fill-color: black !important;
        transition: background-color 5000s ease-in-out 0s;
    }

    .wizard_steps {
        height: 105px !important;
    }

    .feedback-error {
        margin: 0px;
        margin-top: -15px;
        margin-left: 32px;
        color: red;
        margin-bottom: 0px;
        font-size: small;
        display: none;
    }

    .btn-add-dependente {
        background-color: #3d88f8;
    }

    .esqueceu {
        color: #6c757d;
        font-size: smaller;
    }

</style>
<body>
<div id="dtr-wrapper" class="clearfix">

   <!-- Navbar e Modais Comuns -->
   @include('public.nav')


 <!-- section starts
================================================== -->
    <section id="section-3" class="dtr-section dtr-py-100 d-none">
        <div class="container">

            <!--== row starts ==-->
            {{-- <div class="row ">
                <div class="col d-flex">
                    <div class="m-auto">
                        <h2 class="color-white fs-1">Meu Cartão de Vantagens</h2>
                        </a>
                    </div>
                </div>
            </div> --}}
            <!--== row ends ==-->

        </div>
    </section>
<!-- section ends
================================================== -->

        <!-- services section starts
================================================== -->
        <section id="services" class="dtr-section dtr-pt-100 dtr-pb-70 bg-white">
            <div class="container my-auto">

                <!-- heading starts -->
                {{-- <div class="dtr-section-intro text-left dtr-mb-50 d-none">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">Meu Cartão</p>
                    </div>
                    <!-- <h2 class="dtr-intro-heading">Cadastro - Cartão de Vantagens</h2> -->
                    <p>Veja nas informações abaixo o andamento dos seus cartões</p>
                </div> --}}
                <!-- heading ends -->

                <!--== row 1 starts ==-->
                <div class="row wow fadeInUp justify-content-center" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                   <div class="col-md-6 align-items-center">
                       <form action="{{route('cliente.logar')}}" method="POST">
                        @csrf
                        <h4 class="StepTitle text-center">Meu Cartão</h4>
                        <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="cpf"  value="{{ old('cpf') }}" placeholder="CPF*" required class="form-control">
                            <p class="feedback-error">Utilize um CPF válido.</p>
                        </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password"  name="password" placeholder="Senha*" required class="form-control">
                                <p class="feedback-error">Esse campo é obrigatório.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex">
                                <button class="cadastrar btn m-auto mb-4" type="submit">Entrar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col items-align-center justify-content-center d-flex">
                                <a class="m-auto esqueceu" href="{{route("cliente.recuperacao")}}">Esqueceu a senha?</a>
                            </div>
                        </div>
                       </form>
                   </div>
                </div>
                <!--== row 1 ends ==-->

            </div>
        </section>
        <!-- services section ends
================================================== -->

    </div>
    <!-- == main content area ends == -->

    <!-- Footer -->
    @include('public.footer')
    <!-- /Footer -->

    <!-- take top arrow -->
    <a id="take-to-top" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-fade-scroll " style="display: none;"></a>
    </div>
    <!-- #dtr-wrapper ends -->

    <!-- JS FILES -->
    @include('public.scripts')
    <!-- jQuery Smart Wizard -->
    <script src="{{url('assets/js/jquery.smartWizard.js')}}"></script>
    <script>

        $(function(){
            //...
        });

    </script>


    <!-- Verifica se há mensagem de sucesso na sessão -->
    @if (session("success"))
        <script>
            Swal.fire({
                title: 'Sucesso!',
                icon: 'success',
                html:"{!!session('success')!!}",
                showCloseButton: false,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText:'OK',
            });
        </script>
    @endif


</body></html>
