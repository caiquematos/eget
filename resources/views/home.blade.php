<!DOCTYPE html>
<!-- saved from url=(0072)http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements# -->
<html lang="en">

@include('public.head')

<style>

    @media (max-width: 1400px) {
        #section-1 {
            height: 600px !important;
        }
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

    #section-1 {
        height: 600px;
        background-image: url("{{url('template/assets/img/banner_mob.webp')}}");
        background-position: center;
        background-size: cover;
        margin-top: 89px;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
    }

    #section-1 img {
        max-height: 475px;
    }

    #section-1 h1 {

        letter-spacing: 0px !important;
    }
    #dtr-header-global {
        background-color: white;
    }

    #section-1 .dtr-intro-content {
        font-size: 20px !important;
        line-height: 1.1em !important;
    }

    .dtr-btn {
        background-color: #1c4048 !important;
        border-color: #33485c00 !important;
        color: #fff;
    }

    #section-1 .dtr-btn-text {
        font-size: 24px !important;
    }

    #section-3 {
        background-image: url('template/assets/img/fundo-03.webp');
        height: 450px;
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

    #process {
        background-image: url('template/assets/img/banner-02.webp');
        background-position: right;
        background-size: cover;
        background-repeat: no-repeat;
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

    #services .mh {
        min-height: 283.4px;
    }

    #services .ico-size-6 {
        width: 60px !important;
    }

    #services .ico-size-5 {
        width: 50px !important;
    }

    #faq .dtr-accordion .accordion-button:not(.collapsed) {
        background-color: transparent;
        color: #4bc192;
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
        #section-1 {
            background-image: url('template/assets/img/banner_mob.webp');
        }

        #section-1 .dtr-btn-text {
            font-size: 23px !important;
        }

        h2 {
            font-size: 34px !important;
        }

        #process .dtr-feature-top.text-left {
            text-align: center;
        }

        #process p {
            text-align: justify !important;
        }

        #section-3 .dtr-btn-text {
            font-size: 20px !important;
        }

    }

</style>

<body>
<div id="dtr-wrapper" class="clearfix">

    <!-- Navbar e Modais Comuns -->
    @include('public.nav')

    <!-- == main content area starts == -->
    <div id="dtr-main-content">

        <!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section">
            {{-- background-image:url(template/assets/img/banner_cdi.webp) --}}
            <div id="section-1" class="dtr-section bg-dark">
                <div class="container">

                    <!--== row starts ==-->
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5 d-flex">

                            <!-- animated hedline starts -->
                            {{-- <p class=" dtr-animated-headline font-weight-medium text-left slide color-dark"><span class="dtr-words-wrapper w-100" style="width: 233.547px;">
                                <!--== text starts ==-->
                                <!-- first line -->
                                <b class="is-hidden">Beautiful design interface <img draggable="false" role="img" class="emoji" alt="✨" src="{{url('template/assets/img/2728.svg')}}" width="22"></b>
                                <!-- second line -->
                                <b class="is-hidden"> Blazing fast technology <img draggable="false" role="img" class="emoji" alt="⚡" src="{{url('template/assets/img/26a1.svg')}}" width="22"> </b>
                                <!-- third line -->
                                <b class="is-visible"> Cloud-focused delivery <img draggable="false" role="img" class="emoji" alt="⭐" src="{{url('template/assets/img/2b50.svg')}}" width="22"> </b>
                                <!--== text ends ==-->
                                </span></p> --}}
                            <!-- animated hedline ends -->
                            <div class="my-auto">
                                <h2 class="color-white fs-2">O CDI Cartão de Vantagens é para você cuidar da sua saúde com mais economia e praticiadade.</h2>
                                <div class="d-flex dtr-my-40"><div class="faixa-1"></div><div class="faixa-2"></div></div>
                                <p class="dtr-intro-content color-white">Agende exames com descontos especiais, sem carência ou mensalidade e ainda obtenha cacheback.</p>
                                <!-- button starts -->
                                <a class="dtr-btn dtr-btn-small dtr-mt-50 my-sm-auto w-sm-100" href="{{route('cliente.create')}}" role="button">
                                    <p style="text-align: center" class="dtr-btn-text">Quero fazer meu cartão!</p>
                                </a>
                            </div>
                            <!-- button ends -->

                        </div>
                        <div class="col-12 col-md-5 d-flex">
                            <img class="m-auto d-none d-md-block" src="{{url('template/assets/img/cartoes.webp')}}" alt="CDI Cartão de vantagens" >
                        </div>
                    </div>
                    <!--== row ends ==-->

                </div>
            </div>
        </section>
        <!-- hero section ends
================================================== -->

    <!-- process section starts
================================================== -->
    <section id="process" class="dtr-section dtr-py-100 bg-white">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- heading starts -->
                    <div class="dtr-section-intro text-left dtr-mb-50">
                        <div class="dtr-intro-subheading-wrapper">
                            <p class="dtr-intro-subheading">Quem somos</p>
                        </div>
                        <h2 class="dtr-intro-heading">O que é o CDI<br class="d-none d-md-block">Cartão de Vantagens?</h2>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="dtr-intro-content">O CDI Cartão de Vantagens é um serviço que oferece mais
                                    acessibilidade na área de exames de imagem, disponibilizando
                                    descontos especiais para seus usuários. É mais facilidade para
                                    sua saúde e qualidade de vida. </p>
                            </div>
                        </div>
                    </div>
                    <!-- heading ends -->

                    <!--== row starts ==-->
                    <div class="row">

                        <!-- process bar starts -->
                        {{-- <div class="dtr-process-bar-center dtr-mb-100 dtr-pt-30 color-dark">
                            <div class="dtr-process-bar dtr-shadow">
                                <ul class="dtr-process-list">
                                    <li> Onboard </li>
                                    <li> Collaborate </li>
                                    <li> Automate </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- process bar ends -->

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-5">
                            <div class="dtr-feature dtr-feature-top dtr-feature-circle dtr-feature-large text-left ">
                                <div class="dtr-feature-icon p-4 mx-sm-auto mx-md-0" style="background-color: #4bc192"><img src="{{url('template\assets\img\icone-01.png')}}" alt="CDI - missão"/> </div>
                                <div class="dtr-feature-content">
                                    <h4 class="dtr-feature-heading">Missão</h4>
                                </div>
                            </div>
                            <p class="dtr-pt-20">Promover maior acesso a exames de
                                imagem, contribuindo assim para mais
                                qualidade de vida, saúde e bem-estar
                                na região do Vale do São Francisco.</p>
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-5 small-device-space">
                            <div class="dtr-feature dtr-feature-top dtr-feature-circle dtr-feature-large text-left ">
                                <div class="dtr-feature-icon p-4 mx-sm-auto mx-md-0" style="background-color: #4592a3"> <img src="{{url('template\assets\img\icone-02.png')}}" alt="CDI -  valores"/> </div>
                                <div class="dtr-feature-content">
                                    <h4 class="dtr-feature-heading">Valores</h4>
                                </div>
                            </div>
                            <p class="dtr-pt-20">Nossos valores são pautados
                                na empatia, eficiência,
                                qualidade e transparência.</p>
                        </div>
                        <!-- column 2 ends -->

                    </div>
                    <!--== row ends ==-->
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- process section ends
================================================== -->

 <!-- section starts
================================================== -->
<section id="section-3" class="dtr-section dtr-py-100">
    <div class="container">

        <!--== row starts ==-->
        <div class="row">
            <div class="col d-flex">
                <a class="dtr-btn dtr-pricing-btn btn-blue mx-auto"  href="{{route('cliente.create')}}" role="button"><span class="dtr-btn-text">Quero fazer o meu cartão!</span></a>
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
                        <p class="dtr-intro-subheading">Vantagens</p>
                    </div>
                    <h2 class="dtr-intro-heading">Economia e saúde andando juntas</h2>
                    <div class="row">
                        <div class="col-md-7">
                            <p class="dtr-intro-content">O cartão de vantagens do CDI disponibiliza descontos especiais em
                                exames de imagem, sem carência, taxa de adesão ou mensalidade.
                                Além disso, também tem cashback para beneficiários. Muito mais
                                agilidade e economia para quem precisa!</p>
                        </div>
                    </div>

                </div>
                <!-- heading ends -->

                <!--== row 1 starts ==-->
                <div class="row wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-servicebox-wrapper dtr-servicebox-offset-border dtr-box-rounded">
                            <div class="dtr-servicebox dtr-shadow bg-my-green color-dark" > <span class="dtr-servicebox-number">01</span>
                                <div class="dtr-servicebox-head">
                                    <div class="dtr-servicebox-icon color-orange"> <img class="ico-size-5" src="{{url('template/assets/img/card-01.png')}}" alt="Cartão de Vantagens - Descontos especiais"> </div>
                                    <h4 class="dtr-servicebox-heading text-white">Descontos<br>
                                        especiais </h4>
                                </div>
                                <div class="dtr-servicebox-content">Você pagará bem menos para realizar exames como tomografia, ressonância e ultrassom.</div>
                            </div>
                        </div>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-servicebox-wrapper dtr-servicebox-offset-border dtr-box-rounded">
                            <div class="dtr-servicebox dtr-shadow bg-my-blue color-dark"> <span class="dtr-servicebox-number">02</span>
                                <div class="dtr-servicebox-head">
                                    <div class="dtr-servicebox-icon color-cyan"> <img class="ico-size-6" src="{{url('template/assets/img/card-02.png')}}" alt="Cartão de Vantagens - Cashback"> </div>
                                    <h4 class="dtr-servicebox-heading text-white">Ganhe<br>
                                        cashback </h4>
                                </div>
                                <div class="dtr-servicebox-content">Você pagará bem menos para realizar exames como tomografia, ressonância e ultrassom.</div>
                            </div>
                        </div>
                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-servicebox-wrapper dtr-servicebox-offset-border dtr-box-rounded">
                            <div class="dtr-servicebox dtr-shadow bg-my-blue color-dark"> <span class="dtr-servicebox-number">03</span>
                                <div class="dtr-servicebox-head">
                                    <div class="dtr-servicebox-icon color-sky-blue"> <img  class="ico-size-6"  src="{{url('template/assets/img/card-02.png')}}" alt="Cartão de Vantagens - Cashback"> </div>
                                    <h4 class="dtr-servicebox-heading text-white">Ganhe<br>
                                        cashback </h4>
                                </div>
                                <div class="dtr-servicebox-content">Você pagará bem menos para realizar exames como tomografia, ressonância e ultrassom.</div>
                            </div>
                        </div>
                    </div>
                    <!-- column 3 ends -->

                </div>
                <!--== row 1 ends ==-->

                <!--== row 2 starts ==-->
                <div class="row wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-servicebox-wrapper dtr-servicebox-offset-border dtr-box-rounded">
                            <div class="dtr-servicebox dtr-shadow bg-my-light-blue color-dark mh"> <span class="dtr-servicebox-number">04</span>
                                <div class="dtr-servicebox-head">
                                    <div class="dtr-servicebox-icon color-dark"><img  class="ico-size-5"  src="{{url('template/assets/img/card-04.png')}}" alt="Cartão de Vantagens - Zero carência"></div>
                                    <h4 class="dtr-servicebox-heading text-dark">Zero<br>
                                        carência</h4>
                                </div>
                                <div class="dtr-servicebox-content"> <div class="dtr-servicebox-content">Você pagará bem menos para realizar exames como tomografia, e ultrassom.</div> </div>
                            </div>
                        </div>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-servicebox-wrapper dtr-servicebox-offset-border dtr-box-rounded">
                            <div class="dtr-servicebox dtr-shadow bg-my-light-green color-dark"> <span class="dtr-servicebox-number">05</span>
                                <div class="dtr-servicebox-head">
                                    <div class="dtr-servicebox-icon color-dark"> <img  class="ico-size-6"  src="{{url('template/assets/img/card-05.png')}}" alt="Cartão de Vantagens - Sem custo para você"> </div>
                                    <h4 class="dtr-servicebox-heading text-dark">Sem custo<br>
                                        para você*</h4>
                                </div>
                                <div class="dtr-servicebox-content">Você não paga nada para fazer seu cartão e também não precisa se preocupar com mensalidades. </div>
                            </div>
                        </div>
                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-servicebox-wrapper dtr-servicebox-offset-border dtr-box-rounded">
                            <div class="dtr-servicebox dtr-shadow bg-my-light-green color-dark"> <span class="dtr-servicebox-number">06</span>
                                <div class="dtr-servicebox-head">
                                    <div class="dtr-servicebox-icon color-blue"> <img  class="ico-size-6"  src="{{url('template/assets/img/card-05.png')}}" alt="Cartão de Vantagens - Sem custo para você"> </div>
                                    <h4 class="dtr-servicebox-heading text-dark">Sem custo<br>
                                        para você*</h4>
                                </div>
                                <div class="dtr-servicebox-content">Você não paga nada para fazer seu cartão e também não precisa se preocupar com mensalidades. </div>
                            </div>
                        </div>
                    </div>
                    <!-- column 3 ends -->

                </div>
                <!--== row 2 ends ==-->

            </div>
        </section>
        <!-- services section ends
================================================== -->

        <!-- team section starts
================================================== -->
        {{-- <section id="team" class="dtr-section dtr-pt-100 dtr-pb-70">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-center dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">The Team</p>
                    </div>
                    <h2 class="dtr-intro-heading">People behind XaaSvik</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration</p>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6 col-lg-3">

                        <!-- member starts -->
                        <div class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                            <div class="dtr-team-content-wrapper dtr-shadow">
                                <div class="dtr-team-img"> <img src="{{url('template/assets/img/team-member-1.jpg')}}" alt="image"> </div>
                                <div class="dtr-team-content bg-white">
                                    <h5 class="dtr-team-title">Will McMilan</h5>
                                    <p class="dtr-team-subtitle">CEO</p>
                                    <!-- team social starts -->
                                    <div class="dtr-team-social">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li>
                                        </ul>
                                    </div>
                                    <!-- team social ends -->
                                </div>
                            </div>
                        </div>
                        <!-- member ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 col-lg-3">

                        <!-- member starts -->
                        <div class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                            <div class="dtr-team-content-wrapper dtr-shadow">
                                <div class="dtr-team-img"> <img src="{{url('template/assets/img/team-member-2.jpg')}}" alt="image"> </div>
                                <div class="dtr-team-content bg-white">
                                    <h5 class="dtr-team-title">Alexa Smith</h5>
                                    <p class="dtr-team-subtitle">Business Head</p>
                                    <!-- team social starts -->
                                    <div class="dtr-team-social">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li>
                                        </ul>
                                    </div>
                                    <!-- team social ends -->
                                </div>
                            </div>
                        </div>
                        <!-- member ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-6 col-lg-3">

                        <!-- member starts -->
                        <div class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                            <div class="dtr-team-content-wrapper dtr-shadow">
                                <div class="dtr-team-img"> <img src="{{url('template/assets/img/team-member-3.jpg')}}" alt="image"> </div>
                                <div class="dtr-team-content bg-white">
                                    <h5 class="dtr-team-title">Anthony Sommers</h5>
                                    <p class="dtr-team-subtitle">Product Lead</p>
                                    <!-- team social starts -->
                                    <div class="dtr-team-social">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li>
                                        </ul>
                                    </div>
                                    <!-- team social ends -->
                                </div>
                            </div>
                        </div>
                        <!-- member ends -->

                    </div>
                    <!-- column 3 ends -->

                    <!-- column 4 starts -->
                    <div class="col-12 col-md-6 col-lg-3">

                        <!-- member starts -->
                        <div class="dtr-team dtr-team-social-onhover text-center dtr-team-offset-border dtr-box-rounded">
                            <div class="dtr-team-content-wrapper dtr-shadow">
                                <div class="dtr-team-img"> <img src="{{url('template/assets/img/team-member-4.jpg')}}" alt="image"> </div>
                                <div class="dtr-team-content bg-white">
                                    <h5 class="dtr-team-title">Jade Anderson</h5>
                                    <p class="dtr-team-subtitle">CTO</p>
                                    <!-- team social starts -->
                                    <div class="dtr-team-social">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                            <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li>
                                        </ul>
                                    </div>
                                    <!-- team social ends -->
                                </div>
                            </div>
                        </div>
                        <!-- member ends -->

                    </div>
                    <!-- column 4 ends -->

                </div>
                <!--== row ends ==-->
            </div>
        </section> --}}
        <!-- team section ends
================================================== -->

        <!-- tab section starts
================================================== -->
        {{-- <section class="dtr-section dtr-py-100 bg-white">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-left dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">Why XaaSvik?</p>
                    </div>
                    <h2 class="dtr-intro-heading">Fast and intuitive integration</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration in some form by<br>
                        injected humour or randomised words.</p>
                </div>
                <!-- heading ends -->

                <!-- tabs starts -->
                <div class="dtr-tabs">
                    <div class="row d-flex align-items-center offset-md-1">

                        <!-- left column starts -->
                        <div class="col-12 col-md-5">
                            <div class="tab-content">
                                <!-- tab 1 -->
                                <div class="tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="features-tab-1-tab"> <img src="{{url('template/assets/img/tab-img1.png')}}" alt="image"> </div>
                                <!-- tab 2 -->
                                <div class="tab-pane" id="features-tab-2" role="tabpanel" aria-labelledby="features-tab-2-tab"><img src="{{url('template/assets/img/tab-img2.png')}}" alt="image"></div>
                                <!-- tab 3 -->
                                <div class="tab-pane" id="features-tab-3" role="tabpanel" aria-labelledby="features-tab-3-tab"><img src="{{url('template/assets/img/tab-img3.png')}}" alt="image"></div>
                            </div>
                        </div>
                        <!-- left column ends -->

                        <!-- right (nav) column starts -->
                        <div class="col-12 col-md-5 small-device-space">
                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

                                <!-- tab 1 content starts -->
                                <a class="nav-link show active" id="features-tab-1-tab" data-bs-toggle="pill" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#features-tab-1" role="tab" aria-controls="features-tab-1">
                                <h4 class="dtr-tabs-heading">Create your tasks</h4>
                                <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                </a>
                                <!-- tab 1 content ends -->

                                <!-- tab 2 content starts -->
                                <a class="nav-link" id="features-tab-2-tab" data-bs-toggle="pill" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#features-tab-2" role="tab" aria-controls="features-tab-2">
                                <h4 class="dtr-tabs-heading">Build your flow</h4>
                                <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                </a>
                                <!-- tab 2 content ends -->

                                <!-- tab 3 content starts -->
                                <a class="nav-link" id="features-tab-3-tab" data-bs-toggle="pill" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#features-tab-3" role="tab" aria-controls="features-tab-3">
                                <h4 class="dtr-tabs-heading">Aquire new users</h4>
                                <p>There are many variations of passages of lorem ipsum dolor amet available.</p>
                                </a>
                                <!-- tab 3 content ends -->

                            </div>
                        </div>
                        <!-- right (nav) column ends -->

                    </div>
                </div>
                <!-- tabs ends -->

            </div>
        </section> --}}
        <!-- tab section ends
================================================== -->

        <!-- testimonial section starts
================================================== -->
        {{-- <section id="reviews" class="dtr-section dtr-section-with-bg dtr-py-100" style="background-image: url(template/assets/img/section-bg-img2.jpg);">

            <!-- overlay -->
            <div class="dtr-overlay dtr-overlay-dark"></div>

            <!-- content on overlay starts -->
            <div class="container-fluid dtr-overlay-content">

                <!-- heading starts -->
                <div class="dtr-section-intro dtr-dark-bg-intro text-center dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">The Reviews</p>
                    </div>
                    <h2 class="dtr-intro-heading">What people say!</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration.</p>
                </div>
                <!-- heading ends -->

                <!--===== testimonial slider starts =====-->
                <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots slick-initialized slick-slider slick-dotted">

                    <!--== slide 1 starts ==-->
                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 7007px; transform: translate3d(-2548px, 0px, 0px);"><div class="dtr-testimonial bg-white slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 607px;" tabindex="-1">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-2-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Eleanor Jensen</h5>
                                <span class="dtr-client-job">Entrepreneur</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-4"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 607px;" tabindex="-1">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-3-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Alizee Denten</h5>
                                <span class="dtr-client-job">Kantole Global</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-5"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 607px;" tabindex="-1">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-1-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Andrew Graham</h5>
                                <span class="dtr-client-job">Entrepreneur</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-4"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide" data-slick-index="0" aria-hidden="true" style="width: 607px;" tabindex="-1" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-1-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">David James</h5>
                                <span class="dtr-client-job">Spin Automation</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-5"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 607px;" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-2-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Eleanor Jensen</h5>
                                <span class="dtr-client-job">Entrepreneur</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-4"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 607px;" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-3-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Alizee Denten</h5>
                                <span class="dtr-client-job">Kantole Global</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-5"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 607px;" tabindex="0" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-1-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Andrew Graham</h5>
                                <span class="dtr-client-job">Entrepreneur</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-4"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" style="width: 607px;" tabindex="-1">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-1-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">David James</h5>
                                <span class="dtr-client-job">Spin Automation</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-5"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 607px;" tabindex="-1">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-2-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Eleanor Jensen</h5>
                                <span class="dtr-client-job">Entrepreneur</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-4"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 607px;" tabindex="-1">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-3-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Alizee Denten</h5>
                                <span class="dtr-client-job">Kantole Global</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-5"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div><div class="dtr-testimonial bg-white slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 607px;" tabindex="-1">
                        <div class="dtr-client-info">
                            <p class="dtr-testimonial-user"><img src="{{url('template/assets/img/user-1-80x80.jpg')}}" alt="Eleanor Jensen"></p>
                            <div>
                                <h5 class="dtr-client-name">Andrew Graham</h5>
                                <span class="dtr-client-job">Entrepreneur</span> </div>
                            <span class="dtr-testimonial-stars dtr-stars-4"></span> </div>
                        <p class="dtr-testimonial-content">“There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”</p>
                    </div></div></div>
                    <!--== slide 1 ends ==-->

                    <!--== slide 2 starts ==-->

                    <!--== slide 2 ends ==-->

                    <!--== slide 3 starts ==-->

                    <!--== slide 3 ends ==-->

                    <!--== slide 4 starts ==-->

                    <!--== slide 4 ends ==-->

                <ul class="slick-dots" style="" role="tablist"><li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="-1">1</button></li><li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="0" aria-selected="true">2</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 2" tabindex="-1">3</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 2" tabindex="-1">4</button></li></ul></div>
                <!--===== testimonial slider ends =====-->

            </div>
            <!-- content on overlay ends -->

        </section> --}}
        <!-- testimonial section ends
================================================== -->

        <!-- section starts
================================================== -->
        {{-- <section class="dtr-section dtr-pt-100">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-left dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">The Results</p>
                    </div>
                    <h2 class="dtr-intro-heading">Numbers &amp; Satisfaction</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration in some form by<br>
                        injected humour or randomised words.</p>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4 dtr-py-50">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-cursor-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="1" data-to="20" data-speed="1600">20</span> <span class="dtr-counter-suffix color-light-purple">%</span>
                                <p class="dtr-count-text">Clickthrough Rate</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4 dtr-py-50 dtr-border-left dtr-border-right">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-cloud-arrow-down-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="1" data-to="236" data-speed="1600">236</span> <span class="dtr-counter-suffix color-light-purple">+</span>
                                <p class="dtr-count-text">Downloads</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4 dtr-py-50">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-user-circle-gear-fill color-blue"></i>
                            <div><span class="dtr-counter-number counting-number color-blue" data-from="1" data-to="82" data-speed="1600">82</span> <span class="dtr-counter-suffix color-light-purple">%</span>
                                <p class="dtr-count-text">Active Users</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 3 ends -->

                </div>
                <!--== row ends ==-->

                <!--== video starts ==-->
                <div class="dtr-video-box dtr-rounded overflow-hidden dtr-mt-100">

                    <!-- overlay -->
                    <div class="dtr-overlay"></div>

                    <!-- image -->
                    <img src="{{url('template/assets/img/video-bg.jpg')}}" alt="image">

                    <!-- pulsating button starts -->
                    <div class="dtr-video-pulse-wrapper dtr-overlay-content">
                        <div class="dtr-video-pulse pulse-blue">
                            <div class="pulse pulse-1"></div>
                            <div class="pulse pulse-2"></div>
                            <div class="pulse pulse-3"></div>
                            <!-- video link -->
                            <a class="dtr-video-popup dtr-video-button vbox-item" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"></a> </div>
                    </div>
                    <!-- pulsating button ends -->

                </div>
                <!--== video ends ==-->

            </div>
        </section> --}}
        <!-- section ends
================================================== -->

        <!-- pricing section starts
================================================== -->
        {{-- <section id="pricing" class="dtr-section dtr-py-100">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-center dtr-mb-150">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">The Pricing</p>
                    </div>
                    <h2 class="dtr-intro-heading">Perfect plans for you!</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration</p>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row gx-0">

                    <!-- pricing column 1 starts -->
                    <div class="col-12 col-md-4 dtr-mx-0">
                        <div class="dtr-pricing  dtr-pricing-default dtr-box-rounded dtr-shadow bg-white">

                            <!-- heading -->
                            <h4 class="dtr-pricing-heading">Basic</h4>
                            <div class="dtr-pricing-tagline">For getting started</div>
                            <span class="dtr-pricing-divider"></span>

                            <!-- price -->
                            <p class="dtr-price-wrapper color-dark"><span class="dtr-price-prefix"><sup></sup></span><span class="dtr-price">Free</span><span class="dtr-price-suffix"><sub></sub></span></p>

                            <!-- button -->
                            <a class="dtr-btn dtr-pricing-btn btn-white-bordered" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" role="button"><span class="dtr-btn-text">Buy Now</span></a>

                            <!-- list starts -->
                            <ul class="dtr-icon-list dtr-icon-list-default dtr-pricing-list">
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Customized reports </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Unlimited user tests </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Cross border fast payments </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Invoice/custom billing </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Custom integrations </span> </span> </li>
                            </ul>
                            <!-- list ends -->

                        </div>
                    </div>
                    <!-- pricing column 1 ends -->

                    <!-- pricing column 2 starts -->
                    <div class="col-12 col-md-4 dtr-mx-0">
                        <div class="dtr-pricing dtr-pricing-has-stamp dtr-pricing-focused dtr-box-rounded dtr-shadow bg-white">
                            <div class="dtr-pricing-stamp"> <img src="{{url('template/assets/img/pricing-best-plan-label.png')}}" alt="image"> </div>

                            <!-- heading -->
                            <h4 class="dtr-pricing-heading">Pro</h4>
                            <div class="dtr-pricing-tagline">For power users and small teams</div>
                            <span class="dtr-pricing-divider"></span>

                            <!-- price -->
                            <p class="dtr-price-wrapper color-dark"><span class="dtr-price-prefix"><sup>$</sup></span><span class="dtr-price">69.90</span><span class="dtr-price-suffix"><sub>/mo</sub></span></p>

                            <!-- button -->
                            <a class="dtr-btn dtr-pricing-btn btn-blue" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" role="button"><span class="dtr-btn-text">Buy Now</span></a>

                            <!-- list starts -->
                            <ul class="dtr-icon-list dtr-icon-list-default dtr-pricing-list">
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Customized reports </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Unlimited user tests </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Cross border fast payments </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Invoice/custom billing </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Custom integrations </span> </span> </li>
                            </ul>
                            <!-- list ends -->

                        </div>
                    </div>
                    <!-- pricing column 2 ends -->

                    <!-- pricing column 3 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-pricing  dtr-pricing-default dtr-box-rounded dtr-shadow bg-white">

                            <!-- heading -->
                            <h4 class="dtr-pricing-heading">Business</h4>
                            <div class="dtr-pricing-tagline">A flexible plan for growing teams</div>
                            <span class="dtr-pricing-divider"></span>

                            <!-- pricing -->
                            <p class="dtr-price-wrapper color-dark"><span class="dtr-price-prefix"><sup>$</sup></span><span class="dtr-price">99.90</span><span class="dtr-price-suffix"><sub>/mo</sub></span></p>

                            <!-- button -->
                            <a class="dtr-btn dtr-pricing-btn btn-white-bordered" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" role="button"><span class="dtr-btn-text">Buy Now</span></a>

                            <!-- list starts -->
                            <ul class="dtr-icon-list dtr-icon-list-default dtr-pricing-list">
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Customized reports </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Unlimited user tests </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Cross border fast payments </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Invoice/custom billing </span> </span> </li>
                                <li> <span class="dtr-list-content"> <span class="dtr-list-icon"> <i class="icon-check-fill"></i> </span> <span class="dtr-list-text">Custom integrations </span> </span> </li>
                            </ul>
                            <!-- list ends -->

                        </div>
                    </div>
                    <!-- pricing column 3 ends -->

                </div>
                <!--== row ends ==-->

            </div>
        </section> --}}
        <!-- pricing section ends
================================================== -->

        <!-- accordion section starts
================================================== -->
        <section id="faq" class="dtr-section dtr-pb-100 dtr-py-90 bg-white">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-center dtr-mb-30">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">FAQ</p>
                    </div>
                    <h2 class="dtr-intro-heading">Dúvidas sobre o Cartão de Vantagens?</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration</p>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1">

                        <!--== accordion starts ==-->
                        <div class="dtr-accordion accordion dtr-mt-30" id="accordion1">

                            @foreach ($faqs as $key=>$faq)
                                <!-- item 1 starts -->
                                <div class="accordion-item">
                                    <p class="accordion-header" id="accordion{{$key}}-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion{{$key}}-collapseOne" aria-expanded="false" aria-controls="accordion{{$key}}-collapseOne"> {{$faq->pergunta}} </button>
                                    </p>
                                    <div id="accordion{{$key}}-collapseOne" class="accordion-collapse collapse" aria-labelledby="accordion{{$key}}-headingOne" data-bs-parent="#accordion{{$key}}" style="">
                                        <div class="accordion-body">{!!$faq->resposta!!}</div>
                                    </div>
                                </div>
                                <!-- item 1 ends -->
                            @endforeach

                        </div>
                        <!--== accordion ends ==-->

                    </div>
                </div>
                <!--== row ends ==-->
            </div>
        </section>
        <!-- accordion section ends
================================================== -->

        <!-- screenshot section starts
================================================== -->
        {{-- <section class="dtr-section dtr-section-with-bg dtr-py-100" style="background-image: url(template/assets/img/section-bg-img2.jpg);">

            <!--overlay -->
            <div class="dtr-overlay dtr-overlay-dark"></div>

            <!-- content on overlay starts -->
            <div class="container-fluid dtr-overlay-content">

                <!-- heading starts -->
                <div class="dtr-section-intro dtr-dark-bg-intro text-center">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">UI Blocks</p>
                    </div>
                    <h2 class="dtr-intro-heading">The Screenshots</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration.</p>
                </div>
                <!-- heading ends -->

                <!-- slider starts -->
                <div class="dtr-slick-slider dtr-slider-3col dtr-slick-has-dots dtr-mt-50 slick-initialized slick-slider slick-dotted"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
                    <!-- img 1 -->
                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 8281px; transform: translate3d(-1911px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 607px;" tabindex="-1"> <img src="{{url('template/assets/img/carousel-img3.png')}}" alt="image"> </div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 607px;" tabindex="-1"> <img src="{{url('template/assets/img/carousel-img1.png')}}" alt="image"> </div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 607px;" tabindex="-1"> <img src="{{url('template/assets/img/carousel-img2.png')}}" alt="image"> </div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 607px;" tabindex="0" role="tabpanel" id="slick-slide20" aria-describedby="slick-slide-control20"> <img src="{{url('template/assets/img/carousel-img1.png')}}" alt="image"> </div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 607px;" tabindex="0" role="tabpanel" id="slick-slide21" aria-describedby="slick-slide-control21"> <img src="{{url('template/assets/img/carousel-img2.png')}}" alt="image"> </div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 607px;" tabindex="0" role="tabpanel" id="slick-slide22" aria-describedby="slick-slide-control22"> <img src="{{url('template/assets/img/carousel-img3.png')}}" alt="image"> </div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 607px;" tabindex="-1" role="tabpanel" id="slick-slide23" aria-describedby="slick-slide-control23"> <img src="{{url('template/assets/img/carousel-img1.png')}}" alt="image"> </div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 607px;" tabindex="-1" role="tabpanel" id="slick-slide24" aria-describedby="slick-slide-control24"> <img src="{{url('template/assets/img/carousel-img2.png')}}" alt="image"> </div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 607px;" tabindex="-1"> <img src="{{url('template/assets/img/carousel-img1.png')}}" alt="image"> </div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 607px;" tabindex="-1"> <img src="{{url('template/assets/img/carousel-img2.png')}}" alt="image"> </div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 607px;" tabindex="-1"> <img src="{{url('template/assets/img/carousel-img3.png')}}" alt="image"> </div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 607px;" tabindex="-1"> <img src="{{url('template/assets/img/carousel-img1.png')}}" alt="image"> </div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 607px;" tabindex="-1"> <img src="{{url('template/assets/img/carousel-img2.png')}}" alt="image"> </div></div></div>
                    <!-- img 2 -->

                    <!-- img 3 -->

                    <!-- img 4 -->

                    <!-- img 5 -->

                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control20" aria-controls="slick-slide20" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control21" aria-controls="slick-slide21" aria-label="2 of 2" tabindex="-1">2</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control22" aria-controls="slick-slide22" aria-label="3 of 2" tabindex="-1">3</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control23" aria-controls="slick-slide23" aria-label="4 of 2" tabindex="-1">4</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control24" aria-controls="slick-slide24" aria-label="5 of 2" tabindex="-1">5</button></li></ul></div>
                <!-- slider ends -->

            </div>
            <!-- content on overlay ends -->

        </section> --}}
        <!-- screenshot section ends
================================================== -->

        <!-- blog section starts
================================================== -->
        {{-- <section id="blog" class="dtr-section dtr-py-100 bg-white">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-center dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">News &amp; Articles</p>
                    </div>
                    <h2 class="dtr-intro-heading"> Latest blog posts</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration</p>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-post-item">
                            <div class="dtr-post-img"> <img src="{{url('template/assets/img/post-img1.jpg')}}" alt="image"> </div>
                            <div class="dtr-post-content"> <span class="dtr-meta-category"><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#">DevOps</a></span>
                                <h5 class="dtr-post-title"><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" rel="bookmark">Adapting &amp; onboarding users in a virtual workplace</a></h5>
                                <div class="dtr-meta color-dark-gray"> <span class="dtr-meta-author-avatar"><img src="{{url('template/assets/img/user-1-80x80.jpg')}}" alt="image"></span> Aurora Walker<span class="dtr-meta-date">15. 08. 2021</span></div>
                                <p class="dtr-post-excerpt">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by…</p>
                                <a class="dtr-read-more" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#"><span class="dtr-read-more-content">Continue Reading ...</span></a></div>
                        </div>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-post-item">
                            <div class="dtr-post-img"> <img src="{{url('template/assets/img/post-img2.jpg')}}" alt="image"> </div>
                            <div class="dtr-post-content"> <span class="dtr-meta-category"><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#">Application</a></span>
                                <h5 class="dtr-post-title"><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" rel="bookmark">The Benefits of XaaS Cloud Solutions</a></h5>
                                <div class="dtr-meta color-dark-gray"> <span class="dtr-meta-author-avatar"><img src="{{url('template/assets/img/user-2-80x80.jpg')}}" alt="image"></span> Noah Wilson<span class="dtr-meta-date">20. 07. 2021</span></div>
                                <p class="dtr-post-excerpt">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by…</p>
                                <a class="dtr-read-more" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#"><span class="dtr-read-more-content">Continue Reading ...</span></a></div>
                        </div>
                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-post-item">
                            <div class="dtr-post-img"> <img src="{{url('template/assets/img/post-img3.jpg')}}" alt="image"> </div>
                            <div class="dtr-post-content"> <span class="dtr-meta-category"><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#">DevOps</a></span>
                                <h5 class="dtr-post-title"><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" rel="bookmark">Why SaaS application usage exploding!</a></h5>
                                <div class="dtr-meta color-dark-gray"> <span class="dtr-meta-author-avatar"><img src="{{url('template/assets/img/user-1-80x80.jpg')}}" alt="image"></span> Aurora Walker<span class="dtr-meta-date">22. 06. 2021</span></div>
                                <p class="dtr-post-excerpt">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by…</p>
                                <a class="dtr-read-more" href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#"><span class="dtr-read-more-content">Continue Reading ...</span></a></div>
                        </div>
                    </div>
                    <!-- column 3 ends -->

                </div>
                <!--== row ends ==-->

            </div>
        </section> --}}
        <!-- blog section ends
================================================== -->

        <!-- contact section starts
================================================== -->
        {{-- <section id="contact" class="dtr-section dtr-py-100">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-center dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">Contact Us</p>
                    </div>
                    <h2 class="dtr-intro-heading">How can we help you</h2>
                    <p class="dtr-intro-content">Have a question, or just want to say Hi <img draggable="false" role="img" class="emoji" alt="👋" src="{{url('template/assets/img/1f44b.svg')}}" width="20px"> Fill in the form below</p>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-10 offset-md-1">
                        <div class="dtr-box-wrapper">
                            <div class="dtr-box dtr-shadow">

                                <!-- form starts -->
                                <form id="contactform" method="post" action="http://tanshcreative.com/xaasvik-lp-preview/php/contact-form.php" novalidate="novalidate">
                                    <fieldset control-id="ControlID-1">
                                        <div class="dtr-form-row-2col">
                                            <p class="dtr-form-column">
                                                <label>Your name</label>
                                                <input name="name" type="text" placeholder="Name" control-id="ControlID-2">
                                            </p>
                                            <p class="dtr-form-column">
                                                <label>Your email</label>
                                                <input name="email" class="required email" type="text" placeholder="Email Address" control-id="ControlID-3">
                                            </p>
                                        </div>
                                        <p class="dtr-form-field">
                                            <label>Your message</label>
                                            <textarea rows="5" name="message" class="required" placeholder="Message..." control-id="ControlID-4"></textarea>
                                        </p>
                                        <p class="antispam">Leave this empty: <br>
                                            <input name="url" control-id="ControlID-5">
                                        </p>
                                        <p class="text-end" style="margin-top: -40px; margin-right: 20px;">
                                            <button class="dtr-btn" type="submit" control-id="ControlID-6">Submit</button>
                                        </p>
                                        <div id="contactresult"></div>
                                    </fieldset>
                                </form>
                                <!-- form ends -->

                            </div>
                        </div>
                    </div>
                    <!-- column 1 ends -->

                </div>
                <!--== row ends ==-->

            </div>
        </section> --}}
        <!-- contact section ends
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
    <script>
        $(".nav-link").click(function() {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
        })
    </script>

</body></html>
