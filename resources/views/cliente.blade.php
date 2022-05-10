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
                                    <input type="text" name="nome"  value="{{ old('nome') }}" placeholder="Nome*" required class="form-control">
                                    <p class="feedback-error">Esse campo é obrigatório.</p>
                                </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="cliente-email" type="email" value="{{ old('email') }}"  name="email" placeholder="Email*" required class="form-control">
                                    <p class="feedback-error">Utilize um email válido.</p>
                                </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="celular"  value="{{ old('celular') }}" name="celular" placeholder="Whatsapp*" required class="form-control">
                                        <p class="feedback-error">Esse campo é obrigatório.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="step-2">
                                <h4 class="StepTitle text-center">Informações de Login</h4>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="cpf" value="{{ old('cpf') }}" name="cpf" placeholder="CPF*" required class="form-control">
                                        <p class="feedback-error">Utilize um CPF válido.</p>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="password" name="senha" autocomplete="new-password" placeholder="Senha*" required class="form-control">
                                        <p class="feedback-error">Esse campo é obrigatório.</p>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="password" name="senha_confirmation" autocomplete="new-password" placeholder="Confirmar senha*" required class="form-control">
                                        <p class="feedback-error">As senhas não combinam.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="step-3">
                                <h4 class="StepTitle text-center">Endereço</h4>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="cep" value="{{ old('cep') }}" name="cep" placeholder="CEP*" required class="form-control">
                                        <p class="feedback-error">Utilize um CEP válido.</p>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="endereco"  value="{{ old('endereco') }}"  name="endereco" placeholder="endereco*" required class="form-control">
                                        <p class="feedback-error">Esse campo é obrigatório.</p>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-2 col-sm-6 ">
                                        <input type="text" data-tipo="numero"  value="{{ old('numero') }}" name="numero" placeholder="Número*" required class="form-control">
                                        <p class="feedback-error">Esse campo é obrigatório.</p>
                                    </div>
                                    <div class="col-md-4 col-sm-6 ">
                                        <input type="text" data-tipo="complemento"  value="{{ old('complemento') }}"  name="complemento" placeholder="Complemento" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" data-tipo="bairro" value="{{ old('bairro') }}" name="bairro" placeholder="Bairro*" required class="form-control">
                                        <p class="feedback-error">Esse campo é obrigatório.</p>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-3 col-sm-6 ">
                                        <input type="text" data-tipo="estado"  value="{{ old('estado') }}"  name="estado" placeholder="Estado*" required class="form-control">
                                        <p class="feedback-error">Esse campo é obrigatório.</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 ">
                                        <input type="text" data-tipo="cidade" name="cidade"  value="{{ old('cidade') }}" placeholder="Cidade*" required class="form-control">
                                        <p class="feedback-error">Esse campo é obrigatório.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="step-4">
                                <h4 class="StepTitle text-center">Dependentes</h4>
                                <div id="btn_add_dependente" class="row justify-content-center">
                                    <div class="col-md-6 col-sm-6 d-flex align-items-center">
                                        <button class="btn btn-success mx-auto btn-add-dependente" onclick="addDependente(this)"><span>Adicionar Dependente</span></button>
                                    </div>
                                </div>
                                <div id="dependentes"></div>
                            </div>
                        </div>
                        <div class="wizard-btns-wrapper float-end">
                            <button class="prev btn btn-danger m-1" type="button" disabled>Voltar</button>
                            <button class="next btn btn-success m-1" type="button">Avançar</button>
                            <button class="cadastrar btn m-1 d-none" type="submit">Cadastrar</button>
                        </div>
                    </form>
                    <!-- End SmartWi zard Content -->
                </div>
                <!-- heading ends -->

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
                $('.buttonNext').click();
                step++;
                handleStep(step);
            });

            $('.prev').click(function() {
                if (step > 1) step--;
                $('.buttonPrevious').click();
                handleStep(step);
            });
        });

        function handleStep(step) {
            if (step > 1) {
                $('.prev').prop('disabled', false);
            } else {
                $('.prev').prop('disabled', true);
            } 
            if (step == 4) {
                console.log("step == 4");
                 $('.next').addClass('d-none');
                $('.cadastrar').removeClass('d-none');
            }
            else if (step < 4) {
                console.log("step < 4");
                $('.cadastrar').addClass('d-none');
                $('.next').removeClass('d-none');
            }
            console.log("step", step);
        }

        function init_SmartWizard() {

            if (typeof ($.fn.smartWizard) === 'undefined') { return; }
            console.log('init_SmartWizard');

            smartwizard = $('#wizard').smartWizard({
                justified: true,
                keyboardSettings: {
                    keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                    keyLeft: [37], // Left key code
                    keyRight: [39] // Right key code
                }
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
                $(".feedback-error").hide();
                input.focus();
                let fb = $(input).next();
                fb.fadeIn();
                return false;
            }

            return true;
        }

        function validar_step_2() {
            let input, cancelar = false;
            let cpf = $("input[name=cpf]");
            let password = $("input[name=senha]");
            let confirm_password = $("input[name=senha_confirmation]");


            if (confirm_password.val() !== password.val()) {
                input = confirm_password;
                cancelar = true;
            }

            if (!confirm_password.val()) {
                input = confirm_password;
                cancelar = true;
            }

            if (!password.val()) {
                input = password;
                cancelar = true;
            }

            if (!cpf.val() || !is_cpf_valid(cpf.val())) {
                input = cpf;
                cancelar = true;
            }

            if (cancelar) {
                $(".feedback-error").hide();
                input.focus();
                let fb = $(input).next();
                fb.fadeIn();
                return false;
            }

            return true;
        }

        function validar_step_3() {
            let input, cancelar = false;
            let cidade = $("input[name=cidade]");
            let estado = $("input[name=estado]");
            let bairro = $("input[name=bairro]");
            let numero = $("input[name=numero]");
            let endereco = $("input[name=endereco]");
            let cep = $("input[name=cep]");

            if (!cidade.val()) {
                input = cidade;
                cancelar = true;
            }

            if (!estado.val()) {
                input = estado;
                cancelar = true;
            }

            if (!bairro.val()) {
                input = bairro;
                cancelar = true;
            }

            if (!numero.val()) {
                input = numero;
                cancelar = true;
            }

            if (!endereco.val()) {
                input = endereco;
                cancelar = true;
            }

            if (!cep.val() || !is_cep_valid(cep.val())) {
                input = cep;
                cancelar = true;
            }

            if (cancelar) {
                $(".feedback-error").hide();
                input.focus();
                let fb = $(input).next();
                fb.fadeIn();
                return false;
            }

            return true;
        }

    </script>

    <!-- Verifica se há mensagem de sucesso na sessão -->
    @if (session("success"))
    <script>
        Swal.fire({
            title: 'Sucesso',
            text: "{{session('success')}}Agora você pode acompanhar o andamento do seu cartão acessando a área 'Meu Cartão'.",
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: "Ok, ir para área 'Meu Cartão'"
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{route('cliente.cartao')}}";
            }
        });
    </script>
    @endif
    <!-- /Verifica se há mensagem de sucesso na sessão -->

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
                            <input type="text" name="dependentes[nome][]" placeholder="Nome*" required class="form-control">
                            <p class="feedback-error">Esse campo é obrigatório.</p>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" data-tipo="cpf" name="dependentes[cpf][]" placeholder="CPF*" required class="form-control">
                            <p class="feedback-error">Esse campo é obrigatório.</p>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <select name="dependentes[sexo][]" class="select2_single" tabindex="-1" required='required'>
                                <option selected>Selecione uma opção*</option>
                                @foreach (GERAL_SEXO as $key=>$sexo)
                                    <option  {{old('dependentes.sexo.0') == $key ? 'selected': ''}} value={{$key}}>{{$sexo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-6 col-sm-6 ">
                            <select name="dependentes[parentesco][]" class="select2_single" tabindex="-1" required='required'>
                                <option selected>Selecione uma opção*</option>
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