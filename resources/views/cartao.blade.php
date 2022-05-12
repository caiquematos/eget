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
        left: 20px;
    }

    .card-container p:nth-child(1) {
        bottom: 52px;
    }

    .card-container p:nth-child(2) {
        bottom: 22px;
    }

    .card-container p:nth-child(3) {
        bottom: 2px;
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
                        <h2 class="color-white fs-1">Meus Cartões</h2>
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
        <section id="services" class="dtr-section dtr-pt-100 dtr-pb-70 bg-white">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-left dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">Cartões CDI</p>
                    </div>
                    <!-- <h2 class="dtr-intro-heading">Cadastro - Cartão de Vantagens</h2> -->
                    <p>Olá, {{Auth::user()->nome}}.<br>Veja nas informações abaixo o andamento dos seus cartões.</p>
                </div>
                <!-- heading ends -->

                <!--== row 1 starts ==-->
                <div class="row wow fadeInUp mb-3" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <p class="fw-bold">Titular</p>
                    <hr>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                            <div class="card-container">
                                <p>{{Auth::user()->nome}}</p>
                                <p>{{Auth::user()->cpf}}</p>
                                <p>{{Auth::user()->nascimento}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--== row 1 ends ==-->
                <!--== row 2 starts ==-->
                <div class="row wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <p class="fw-bold">Dependentes</p>
                    <hr>
                    <div class="row">
                        @isset(Auth::user()->dependentes)
                        @foreach (Auth::user()->dependentes as $dependente)
                            @foreach ($dependente->cartoes as $cartao)
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                                <div class="card-container">
                                    <p>{{$dependente->nome}}</p>
                                    <p>{{$dependente->cpf}}</p>
                                    <p>{{$dependente->nascimento}}</p>
                                    <div class="status">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                        @endisset
                    </div>
                </div>
                <!--== row 2 ends ==-->

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
