<!DOCTYPE html>
<!-- saved from url=(0072)http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements# -->
<html lang="en">

@include('public.head')

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
                    <h2 class="dtr-intro-heading">Faça o cadastro para receber nosso Cartão de Vantagens</h2>
                    {{-- <div class="row">
                        <div class="col-md-7">
                            <p class="dtr-intro-content">O cartão de vantagens do CDI disponibiliza descontos especiais em 
                                exames de imagem, sem carência, taxa de adesão ou mensalidade. 
                                Além disso, também tem cashback para beneficiários. Muito mais 
                                agilidade e economia para quem precisa!</p>
                        </div>
                    </div> --}}
                   
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

    <!-- JS FILES -->
    @include('public.scripts')
    <script>
        $(".nav-link").click(function() {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
        })
    </script>

</body></html>