<!DOCTYPE html>
<!-- saved from url=(0072)http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements# -->
<html lang="en">

<!-- funcoes -->
@include("public.funcoes")
<!-- /funcoes -->
<!-- head -->
@include('public.head')
<!-- /head -->

<link rel="stylesheet" href="{{url('assets/css/smartwizard.css')}}">

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
        height: 400px;
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

    .buttonNext {
        color: #fff;
        background-color: #367e8c !important;
        border-color: #367e8c !important;
    }

    .buttonNext:hover {
        color: #fff;
        background-color: #169F85 !important;
        border-color: #169F85 !important;
    }

    
    .buttonPrevious  {
        color: #fff;
        background-color: #34495E !important;
        border-color: #34495E !important;
    }

    .buttonPrevious:hover {
        color: #fff;
        background-color: #243241 !important;
        border-color: #243241 !important;
    }

    input:-webkit-autofill, input:-webkit-autofill:hover, input:-webkit-autofill:focus, textarea:-webkit-autofill, textarea:-webkit-autofill:hover, textarea:-webkit-autofill:focus, select:-webkit-autofill, select:-webkit-autofill:hover, select:-webkit-autofill:focus {
        border-color: #169F85 !important;
        -webkit-text-fill-color: black !important;
        transition: background-color 5000s ease-in-out 0s;
    }


</style>

<body>
<div id="dtr-wrapper" class="clearfix">

    <!-- preloader starts -->
    <div class="dtr-preloader" style="display: none;">
        <div class="dtr-preloader-inner">
            <div class="dtr-loader">Carregando...</div>
        </div>
    </div>
    <!-- preloader ends -->

    <!-- Small Devices Header
============================================= -->
    <div class="dtr-responsive-header header-with-slick-menu fixed-top" style="">
        <div class="container">

            <!-- small devices logo -->
            <div class="dtr-responsive-header-left"> <a class="dtr-logo" href="{{url('/')}}#home"><img src="{{url('template/assets/img/logo.png')}}" alt="Cadastro"></a> </div>
            <!-- small devices logo ends -->

            <!-- menu button -->
            <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
        </div>
        <div class="dtr-responsive-header-menu"><div class="slicknav_menu"><ul class="slicknav_nav slicknav_hidden" style="touch-action: pan-y; display: none;" aria-hidden="true" role="menu">
                        <li> <a class="nav-link active" href="{{url('/')}}#home" role="menuitem" tabindex="-1">Home</a> </li>
                        <li> <a class="nav-link" href="{{url('/')}}#process" role="menuitem" tabindex="-1">Quem somos</a> </li>
                        <li> <a class="nav-link" href="{{url('/')}}#services" role="menuitem" tabindex="-1">Vantagens</a> </li>
                        <li> <a class="nav-link" href="{{url('/')}}#faq" role="menuitem" tabindex="-1">Perguntas frequentes</a> </li>
                        <li> <a class="nav-link"  data-bs-toggle="modal" href="#contatoModal" role="menuitem" tabindex="-1">Contato</a> </li>
                    </ul></div></div>
    </div>
    <!-- Small Devices Header ends
============================================= -->

    <!-- header starts
============================================= -->
    <header id="dtr-header-global" class="fixed-top on-scroll">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">

                <!-- header left starts -->
                <div class="dtr-header-left">

                    <!-- logo -->
                    <a class="logo-default dtr-scroll-link" href="{{url('/')}}#home"><img src="{{url('template/assets/img/logo.png')}}" alt="Cadastro"></a>

                    <!-- logo on scroll -->
                    <a class="logo-alt dtr-scroll-link" href="{{url('/')}}#home"><h1><img src="{{url('template/assets/img/logo.png')}}" alt="Cadastro"></h1></a>
                    <!-- logo on scroll ends -->

                </div>
                <!-- header left ends -->

                <!-- menu starts-->
                <div class="main-navigation">
                    <ul class="sf-menu dtr-nav dark-nav-on-load dark-nav-on-scroll dtr-menu-dark sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                        <li> <a class="nav-link active" href="{{url('/')}}#home">Home</a> </li>
                        <li> <a class="nav-link" href="{{url('/')}}#process">Quem somos</a> </li>
                        <li> <a class="nav-link" href="{{url('/')}}#services">Vantagens</a> </li>
                        <li> <a class="nav-link" href="{{url('/')}}#faq">Perguntas frequentes</a> </li>
                        <li> <a class="nav-link" data-bs-toggle="modal" href="#contatoModal" role="button">Contato</a> </li>
                    </ul>
                </div>
                <!-- menu ends -->

            </div>
        </div>
    </header>

        <!-- modal starts -->
            <!-- Modal -->
            <div class="modal fade" id="contatoModal" tabindex="-1" aria-labelledby="contatoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('contato')}}" method='POST'>
                        @csrf
                        <div class="modal-header">
                        <h5 class="modal-title" id="contatoModalLabel">Envie uma mensagem pra gente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                {{-- <label for="exampleInputEmail1" class="form-label">Email</label> --}}
                                <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                {{-- <label for="exampleInputassunto" class="form-label">Assunto</label> --}}
                                <input type="text" name="assunto" placeholder="Assunto" class="form-control" id="exampleInputassunto">
                            </div>
                            <div class="mb-3">
                                {{-- <label for="exampleInputmensagem" class="form-label">Mensagem</label> --}}
                                <textarea type="text" name="mensagem" placeholder="Digite sua mensagem aqui"  row=6 class="form-control" id="exampleInputmensagem"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        <!-- modal ends -->
    <!-- header ends
================================================== -->

 <!-- section starts
================================================== -->
    <section id="section-3" class="dtr-section dtr-py-100">
        <div class="container">

            <!--== row starts ==-->
            <div class="row">
                <div class="col d-flex">
                    <div class="m-auto">
                        <h2 class="color-white fs-1">Quero fazer meu cartão de vantagens</h2>
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
                        <p class="dtr-intro-subheading">Clientes</p>
                    </div>
                    <h2 class="dtr-intro-heading">Cadastro - Cartão de Vantagens</h2>
                    <!-- Smart Wizard -->
                    <p>Faça o cadastro para receber nosso Cartão de Vantagens.</p>
                    <form action="{{route('cliente.store')}}" method="post">
                        @csrf
                        <div id="wizard" class="form_wizard wizard_horizontal mt-5">
                            <ul class="wizard_steps">
                                <li>
                                <a href="#step-1">
                                    <span class="step_no">1</span>
                                    <span class="step_descr">
                                        Passo 1<br />
                                    </span>
                                </a>
                                </li>
                                <li>
                                <a href="#step-2">
                                    <span class="step_no">2</span>
                                    <span class="step_descr">
                                        Passo 2<br />
                                    </span>
                                </a>
                                </li>
                                <li>
                                <a href="#step-3">
                                    <span class="step_no">3</span>
                                    <span class="step_descr">
                                        Passo 3<br />
                                    </span>
                                </a>
                                </li>
                                <li>
                                <a href="#step-4">
                                    <span class="step_no">4</span>
                                    <span class="step_descr">
                                                    Passo 4<br />
                                    </span>
                                </a>
                                </li>
                            </ul>
                            <div id="step-1">
                                <h4 class="StepTitle text-center">Informações Pessoais</h4>
                                <div class="form-group row justify-content-center">
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="nome" placeholder="Nome" class="form-control">
                                </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="cliente-email" type="email" name="email" placeholder="Email" class="form-control">
                                </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="celular" name="celular" placeholder="Whatsapp" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div id="step-2">
                                <h4 class="StepTitle text-center">Informações de Login</h4>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="cpf" name="cpf" placeholder="CPF" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="password" name="password" autocomplete="new-password" placeholder="Senha" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="password" name="confirm-password" autocomplete="new-password" placeholder="Confirmar senha" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div id="step-3">
                                <h4 class="StepTitle text-center">Endereço</h4>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="cep" name="cep" placeholder="CEP" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="endereco" name="logradouro" placeholder="Logradouro" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-2 col-sm-6 ">
                                        <input type="text" data-tipo="numero" name="numero" placeholder="Número" class="form-control">
                                    </div>
                                    <div class="col-md-4 col-sm-6 ">
                                        <input type="text" data-tipo="complemento" name="complemento" placeholder="Complemento" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="bairro" name="bairro" placeholder="Bairro" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-3 col-sm-6 ">
                                        <input type="text" data-tipo="estado" name="estado" placeholder="Estado" class="form-control">
                                    </div>
                                    <div class="col-md-3 col-sm-6 ">
                                        <input type="text" data-tipo="cidade" name="cidade" placeholder="Cidade" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div id="step-4">
                                <h4 class="StepTitle text-center">Dependentes</h4>
                                <div id="btn_add_dependente" class="row justify-content-center">
                                    <div class="col-md-6 col-sm-6 d-flex align-items-center">
                                        <button class="btn btn-success mx-auto" onclick="addDependente(this)"><span>Adicionar Dependente</span></button>
                                    </div>
                                </div>
                                <div id="dependentes"></div>
                            </div>
                        </div>
                    </form>
                    <div class="wizard-btns-wrapper float-end">
                        <button class="next btn btn-danger m-1">Voltar</button><button class="next btn btn-success m-1">Avançar</button><button class="btn d-none m-1" type="submit"></button>
                    </div>
                    <!-- End SmartWi zard Content -->
                </div>
                <!-- heading ends -->

                <!--== row 1 starts ==-->
                <div class="row wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                   <div class="col-md-12">

                   </div>

                </div>
                <!--== row 1 ends ==-->

            </div>
        </section>
        <!-- services section ends
================================================== -->

    </div>
    <!-- == main content area ends == -->

    <!-- footer section starts
================================================== -->
    <footer id="dtr-footer">

        <!--== main footer row starts ==-->
        <div class="dtr-main-footer">
            <div class="container">
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6 col-lg-5"><a class="dtr-scroll-link" href="{{url('/')}}#home"><img src="{{url('template/assets/img/logo.png')}}" alt="CDI Cartão de Vantagens"></a>
                        <p class="dtr-mt-20 dtr-mb-40">There are many variations of passages of<br>
                            lorem ipsum available but the majority<br>
                            have suffered alteration.</p>
                        <p class="d-flex align-items-center"><i class="icon-phone-call-fill dtr-mr-10 color-blue"></i>1-800-234 567 89</p>
                        <p class="d-flex align-items-center"><i class="icon-envelope-simple-fill dtr-mr-10 color-blue"></i>sales@example.com</p>
                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6 col-lg-2 small-device-space">
                        <h6>Resources</h6>
                        <ul class="dtr-list-line line-accent">
                            <li>
                                <p><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#">Documentation</a></p>
                            </li>
                            <li>
                                <p><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#">Articles</a></p>
                            </li>
                            <li>
                                <p><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#">Showcase</a></p>
                            </li>
                            <li>
                                <p><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#">Rebuilds</a></p>
                            </li>
                            <li>
                                <p><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#">Templates</a></p>
                            </li>
                        </ul>
                    </div>
                    <!--== column 2 ends ==-->

                    <!--== column 3 starts ==-->
                    <div class="col-12 col-md-6 col-lg-2 small-device-space">
                        <h6>CDI</h6>
                        <ul class="dtr-list-line line-accent">
                            <li>
                                <p><a href="{{url('/')}}#process">Quem somos</a></p>
                            </li>
                            <li>
                                <p><a href="{{url('/')}}#services">Vantagens</a></p>
                            </li>
                            <li>
                                <p><a href="{{url('/')}}#faq">FAQ</a></p>
                            </li>
                            <li>
                                <p><a  data-bs-toggle="modal" href="#contatoModal" role="button">Contato</a></p>
                            </li>
                        </ul>
                    </div>
                    <!--== column 3 ends ==-->

                    <!--== column 4 starts ==-->
                    <div class="col-12 col-md-6 col-lg-3">
                        <h6>Subscribe</h6>
                        <p>Get all updates and notifications by subscribing to our newsletter.</p>

                        <!-- form starts -->
                        <div class="dtr-subscribe-form dtr-mt-20">
                            <input type="email" name="your-email" placeholder="hello@example.com" control-id="ControlID-7">
                            <button type="submit" class="dtr-subscribe-btn" control-id="ControlID-8">Submit</button>
                        </div>
                        <!-- form ends -->

                    </div>
                    <!--== column 4 ends ==-->

                </div>
            </div>
        </div>
        <!--== main footer row ends ==-->

        <!--== copyright row starts ==-->
        <div class="dtr-copyright">
            <div class="container">
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6">

                        <!-- social starts -->
                        <ul class="dtr-social dtr-social-list">
                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li>
                        </ul>
                        <!-- social ends -->

                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6 text-end small-device-space">
                        <p>© 2021 XaaSvik. All rights reserved</p>
                    </div>
                    <!--== column 2 ends ==-->

                </div>
            </div>
        </div>
        <!--== copyright row ends ==-->

    </footer>
    <!-- footer section ends
================================================== -->

    <!-- take top arrow -->
    <a id="take-to-top" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-fade-scroll " style="display: none;"></a>
    </div>
    <!-- #dtr-wrapper ends -->

    <!-- JS FILES -->
    @include('public.scripts')
    <!-- jQuery Smart Wizard -->
    <script src="{{url('assets/js/jquery.smartWizard.js')}}"></script>
    <script>
        /* SMART WIZARD */
        var smartwizard;
        var step = 1;

        $(function(){
           
            init_SmartWizard();

            $('.next').click(function() {
                console.log("step", step);
                switch (step) {
                    case 1:
                        if(!validar_step_1())
                            return;
                    break;
                    case 2:
                        if(!validar_step_2())
                            return;
                    break;
                    case 3:
                        if(!validar_step_3())
                            return;
                    break;
                }
                step++;
                $('.buttonNext').click();

            });

            $('.prev').click(function() {
                console.log("step", step);
                step--;
                $('.buttonPrevious').click();
            });
        });

        function init_SmartWizard() {

            if (typeof ($.fn.smartWizard) === 'undefined') { return; }
            console.log('init_SmartWizard');

            smartwizard = $('#wizard').smartWizard({
                justified: true,
                keyboardSettings: {
                    keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                    keyLeft: [37], // Left key code
                    keyRight: [39] // Right key code
                },
            });
            $('.buttonNext').addClass('btn btn-success').text("Avançar");
            $('.buttonPrevious').addClass('btn btn-primary').text("Voltar");
            $('.buttonFinish').hide();

        };

        function validar_step_1() {
            let input, cancelar = false;
            let whatsapp = $("input[name=celular]");
            let email = $("#cliente-email");
            let nome = $("input[name=nome]");

            if (!whatsapp.val()) {
                input = whatsapp;
                cancelar = true;
            }

            if (!email.val() || !is_email_valid(email.val())) {
                input = email;
                cancelar = true;
            }

            if (!nome.val()) {
                input = nome;
                cancelar = true;
            }

            if (cancelar) {
                input.focus();
                return false;
            }

            return true;
        }

        function validar_step_2() {
            let input, cancelar = false;
            let cpf = $("input[name=cpf]");
            let password = $("input[name=password]");
            let confirm_password = $("input[name=confirm-password]");

            if (!confirm_password.val()) {
                input = confirm_password;
                cancelar = true;
            }

            if (!cpf.val() || !is_cpf_valid(cpf.val())) {
                input = cpf;
                cancelar = true;
            }

            if (!password.val()) {
                input = nome;
                cancelar = true;
            }

            if (cancelar) {
                input.focus();
                return false;
            }

            return true;
        }

        function validar_step_3() {

        }

    </script>

    <!-- Funçoes gerenciamento de dependente	-->
    <script>
        var dependente_counter = 1;
        function addDependente() {
            $("#btn_add_dependente").fadeOut();
            $("#dependentes").append(
                `
                <div id="dependente_${dependente_counter}" class="dependente mb-4" style="display:none">
                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="dependentes[nome][]" placeholder="Nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" data-tipo="cpf" name="dependentes[cpf][]" placeholder="CPF" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <select name="dependentes[sexo][]" class="select2_single" tabindex="-1" required='required'>
                                <option selected>Selecione uma opção</option>
                                @foreach (GERAL_SEXO as $key=>$sexo)
                                    <option  {{old('dependentes.sexo.0') == $key ? 'selected': ''}} value={{$key}}>{{$sexo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <select name="dependentes[parentesco][]" class="select2_single" tabindex="-1" required='required'>
                                <option selected>Selecione uma opção</option>
                                @foreach (DEPENDENTE_PARENTESCO as $key=>$parentesco)
                                <option {{old('dependentes.parentesco.0') == $key ? 'selected': ''}} value={{$key}}>{{$parentesco}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <input class="form-control" class='date' type="date" name="dependentes[nascimento][]" value="{{old('dependentes.nascimento.0')}}" required='required'>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-6 d-flex align-items-center">
                            <button class="btn btn-success ms-auto m-1" onclick="addDependente(this)"><span class="glyphicon glyphicon-plus" aria-hidden="true">Adicionar</span></button>
                            <button class="btn btn-danger me-auto m-1" onclick="remDependente(this)"><span class="glyphicon glyphicon-minus" aria-hidden="true">Remover</span></button>
                        </div>
                    </div>
                </div>
                `
            );
            $(`input[name="dependentes[cpf][]"]`).mask("000.000.000-00");
            $(`#dependente_${dependente_counter}`).slideDown("normal");
            dependente_counter++;
            return false;
        }
        function remDependente(e) {
            let dependente_item = $(e).closest('.dependente');
            dependente_item.slideUp("normal", function() { 
                $(this).remove();
                console.log("hasclass", $('#dependentes').find('.dependente').length);
                if (! $('#dependentes').find('.dependente').length) {
                    $("#btn_add_dependente").fadeIn();
                }
            } );
            return false;
        }
    </script>
    <!-- /Funçoes gerenciamento de dependente	-->


</body></html>