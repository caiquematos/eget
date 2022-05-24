
    <!-- footer section starts
================================================== -->
<footer id="dtr-footer">

    <!--== main footer row starts ==-->
    <div class="dtr-main-footer">
        <div class="container">
            <div class="row">

                <!--== column 1 starts ==-->
                <div class="col-12 col-md-6 col-lg-5"><a class="dtr-scroll-link" href="{{route('home')}}#home"><img src="{{url('template/assets/img/logo_branca.png')}}" alt="CDI Cartão de Vantagens" style="width: 132px"></a>
                    <p class="dtr-mt-20 dtr-mb-40">O CDI Cartão de Vantagens é para você<br>cuidar da sua saúde com mais<br>economia e praticiadade.</p>
                    <p class="d-flex align-items-center"><a href="tel:123-456-7890"><i class="fa fa-phone me-2"></i> (87) 2101-3099</a></p>
                    <p class="d-flex align-items-center"><a href="https://goo.gl/maps/4zNrWtbCFNKdLnuK7" target="_blank"><i class="fa fa-map-marker me-2"></i> Rua Tobias Barreto, 7. Centro, Petrolina - PE.</a></p>
                </div>
                <!--== column 1 ends ==-->

                <!--== column 2 starts ==-->
                {{-- <div class="col-12 col-md-6 col-lg-2 small-device-space">
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
                </div> --}}
                <!--== column 2 ends ==-->

                <!--== column 3 starts ==-->
                <div class="col-12 col-md-6 col-lg-2 small-device-space">
                    <h6>CDI</h6>
                    <ul class="dtr-list-line line-accent">
                        <li>
                            <p><a href="{{route('home')}}#process">Quem somos</a></p>
                        </li>
                        <li>
                            <p><a href="{{route('home')}}#services">Vantagens</a></p>
                        </li>
                        <li>
                            <p><a href="{{route('home')}}#faq">FAQ</a></p>
                        </li>
                        <li>
                            <p><a  data-bs-toggle="modal" href="#contatoModal" role="button">Contato</a></p>
                        </li>
                        <li>
                            <p><a href="{{route('cliente.login')}}">Meu Cartão</a></p>
                        </li>
                    </ul>
                </div>
                <!--== column 3 ends ==-->

                <!--== column 4 starts ==-->
                {{-- <div class="col-12 col-md-6 col-lg-3">
                    <h6>Subscribe</h6>
                    <p>Get all updates and notifications by subscribing to our newsletter.</p>

                    <!-- form starts -->
                    <div class="dtr-subscribe-form dtr-mt-20">
                        <input type="email" name="your-email" placeholder="hello@example.com" control-id="ControlID-7">
                        <button type="submit" class="dtr-subscribe-btn" control-id="ControlID-8">Submit</button>
                    </div>
                    <!-- form ends -->

                </div> --}}
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
                        <li><a href="https://re9agencia.com.br/" target="_blank"><img src="{{url('template/assets/img/logo-menor-re9.png')}}" alt="Re9 Agência" style="width: 30px;margin-right: 5px;"> Desenvolvido por Re9 Agência.</a></li>
                        {{-- <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                        <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                        <li><a href="http://tanshcreative.com/xaasvik-lp-preview/?storefront=envato-elements#" class="dtr-linkedin" target="_blank" title="linkedin"></a></li> --}}
                    </ul>
                    <!-- social ends -->

                </div>
                <!--== column 1 ends ==-->

                <!--== column 2 starts ==-->
                <div class="col-12 col-md-6 text-end small-device-space">
                    <p>© {{date('Y')}} {{env('APP_NAME')}}. Todos os direitos reservados.</p>
                </div>
                <!--== column 2 ends ==-->

            </div>
        </div>
    </div>
    <!--== copyright row ends ==-->

</footer>
<!-- footer section ends
================================================== -->
