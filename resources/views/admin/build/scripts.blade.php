<!-- jQuery -->
<script src="{{url('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{url('admin/vendors/nprogress/nprogress.js')}}"></script>
<!-- jQuery Mask -->
<script src="{{url('admin/assets/js/jquery.mask.min.js')}}"></script>
<!-- PNotify -->
<script src="{{url('admin/vendors/pnotify/dist/pnotify.js')}}"></script>
<script src="{{url('admin/vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
<script src="{{url('admin/vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>

<script src="{{ mix('build/js/common.js') }}"></script>

<!-- Session functions AND Pnotify functions--> 
    
    <!-- Verifica se há erros na sessão -->
    @if ($errors->any())
        @php
            $sessao_erros = "";
            foreach ($errors->all() as $error):
                $sessao_erros.= $error;
            endforeach;
        @endphp
        <script>
            new PNotify({
                title: 'Opa!',
                text: "{{$sessao_erros}}",
                type: 'error',
                styling: 'bootstrap3'
            });
        </script>
    @endif

    <!-- Verifica se há mensagem de sucesso na sessão -->
    @if (session("success"))
        <script>
            new PNotify({
                title: 'Sucesso',
                text: "{{session('success')}}",
                type: 'success',
                styling: 'bootstrap3'
            });
        </script>
    @endif

    @if (isset($success))
        <script>
        console.log("há uma mensagem 'success' returned as var.", "{{$success}}");
        </script>
    @endif

<!-- /Session functions -->

<!-- Custom Theme Scripts -->
<script src="{{url('admin/build/js/custom.min.js')}}"></script>