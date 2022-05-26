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
    }

    /* dessa página */
    .card-container {
        /* background-color: #3f8492 !important; */
        background-image:url("{{url('template/assets/img/card-bg-min.webp')}}");
        width: 354px;
        height: 225px;
        position: relative;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 3px;
        box-shadow: rgb(0 0 0 / 40%) 0px 2px 10px, rgb(0 0 0 / 30%) 0px 7px 13px -3px, rgb(0 0 0 / 20%) 0px -3px 0px inset;
    }

    .card-container p {
        position: absolute;
        font-size: small;
        font-weight: 700;
    }

    .card-container p:nth-child(1) {
        left: 20px;
        bottom: 52px;
    }

    .card-container p:nth-child(2) {
        left: 20px;
        bottom: 22px;
    }

    .card-container p:nth-child(3) {
        left: 20px;
        bottom: -6px;
    }

    .card-container p:nth-child(4) {
        bottom: 13px;
        right: 20px;
        padding: 0px 9px;
        box-shadow: rgb(0 0 0 / 35%) 0px 5px 5px 2px;
        border-radius: 5px;
        border: 2px white solid;
    }
</style>


<style>
    select, textarea, input[type="text"], input[type="date"], input[type="email"], input[type="url"], input[type="password"], input[type="number"], input[type="tel"], input[type="search"] {
        background-color: #e9e9e9 !important;
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
    .StepTitle {
        color: #525252;
    }
    #adicionar-dependente form {
        flex-direction: column;
    }
    .breadcrumb {
        background-color: #cccccc2e;
        padding: 16px 3px 2px 26px;
        border-radius: 4px;
    }
    .breadcrumb-item a {
        color: #2c9f98;
    }
    .breadcrumb-row {
        margin-top: -60px;
    }
</style>

<body>
<div id="dtr-wrapper" class="clearfix">

   <!-- Navbar e Modais Comuns -->
   @include('public.nav')


 <!-- section starts
================================================== -->
    <section id="section-3" class="dtr-section dtr-py-100">
        <div class="container">

            <!--== row starts ==-->
            <div class="row">
                <div class="col d-flex">
                    <div class="m-auto">
                        <h2 class="color-white fs-1">Adicionar Dependente</h2>
                        </a>
                    </div>
                </div>
            </div>
            <!--== row ends ==-->

        </div>
    </section>
<!-- section ends
================================================== -->

        <!-- services section starts
================================================== -->
        <section id="adicionar-dependente" class="dtr-section dtr-pt-100 dtr-pb-70 bg-white">
            <div class="container">

                <div class="row mb-5 breadcrumb-row">
                    <div class="col">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('cliente.cartao')}}">Meu Cartão</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Adicionar Dependente</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!--== row 1 starts ==-->
                <div class="row wow fadeInUp mb-3" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h4 class="StepTitle text-center">Informações do Dependente </h4>
                    <form class="d-flex" action="{{route('cliente.dependente.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id_usuario" value="{{$cliente->id}}">
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="cpf" data-tipo="cpf" value="{{ old('cpf') }}" placeholder="CPF*" required class="form-control">
                                <p class="feedback-error">Esse campo é obrigatório.</p>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome Completo*" required class="form-control">
                                <p class="feedback-error">Esse campo é obrigatório.</p>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 col-sm-6 ">
                                <select name="sexo" class="select2_single" tabindex="-1" required='required'>
                                    <option selected>Selecione uma opção*</option>
                                    @foreach (GERAL_SEXO as $key=>$sexo)
                                        <option  {{old('sexo') == $key ? 'selected': ''}} value={{$key}}>{{$sexo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 col-sm-6 ">
                                <select name="parentesco" class="select2_single" tabindex="-1" required='required'>
                                    <option selected>Selecione uma opção*</option>
                                    @foreach (DEPENDENTE_PARENTESCO as $key=>$parentesco)
                                    <option {{old('parentesco') == $key ? 'selected': ''}} value={{$key}}>{{$parentesco}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" class='date' type="date" name="nascimento" value="{{old('nascimento')}}" required='required'>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mx-auto mt-3">Adicionar</button>
                    </form>
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

</body></html>
