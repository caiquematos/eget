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
        <div class="dtr-responsive-header-left"> <a class="dtr-logo" href="{{url('/')}}#home"><img src="{{url('template/assets/img/logo.png')}}" alt="CDI Cartão de Vantagens"></a> </div>
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
                    <li> <a class="nav-link" href="{{route('cliente.cartao')}}" role="menuitem" tabindex="-1">Meu Cartão</a> </li>
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
                <a class="logo-default dtr-scroll-link" href="{{url('/')}}#home"><img src="{{url('template/assets/img/logo.png')}}" alt="CDI Cartão de Vantagens"></a>

                <!-- logo on scroll -->
                <a class="logo-alt dtr-scroll-link" href="{{url('/')}}#home"><h1><img src="{{url('template/assets/img/logo.png')}}" alt="CDI Cartão de Vantagens"></h1></a>
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
                    <li> <a class="nav-link" href="{{route('cliente.cartao')}}">Meu Cartão</a> </li>
                </ul>
            </div>
            <!-- menu ends -->

        </div>
    </div>
</header>
<!-- header ends
================================================== -->

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