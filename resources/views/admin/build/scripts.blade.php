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
<!-- iCheck -->
<script src="{{url('admin/vendors/iCheck/icheck.min.js')}}"></script>
<!-- jQuery Tags Input -->
<script src="{{url('admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
<!-- Switchery -->
<script src="{{url('admin/vendors/switchery/dist/switchery.min.js')}}"></script>

{{-- <script src="{{ mix('build/js/common.js') }}"></script> --}}

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

<!-- Funções de inicialização -->
<script>
    $(document).ready(function(){
        $('[data-tipo=cpf]').mask('000.000.000-00', {
            reverse: true
        });
        $('[data-tipo=celular]').mask('(00) 0 0000-0000');
        $('[data-tipo=telefone]').mask('(00) 0000-0000');
        $('[data-tipo=cep]').mask('00000-000', {
            reverse: true
        });

        // Iniciallização do filtro.
        $(".filtro").click(function() {
            console.log("clicado");
            $(this).toggleClass("active");
            var div = $("div.dtsp-panesContainer div.dtsp-searchPanes div.dtsp-searchPane");
            if ($(this).hasClass("active")) {
                div.slideDown();
                $(".filtro-subtitle").slideDown();
            } else {
                div.slideUp();
                $(".filtro-subtitle").slideUp();
            }
        });

    });
</script>
<!-- /Funções de inicialização -->

<!-- Funções -->
<script>

    /**
     *
     * @param {string} date
     * @returns string
     */
    function date_pt_en(date) {
        let date_array = date.trim().split("/");
        return `${date_array[2]}-${date_array[1]}-${date_array[0]}`;
    }

    /**
     * @param {string} date
     * @returns string
     */
    function date_en_pt(date) {
        let date_array = date.trim().split("-");
        return `${date_array[0]}/${date_array[1]}/${date_array[2]}`;
    }

    // Busca dados por CEP.
    $("input[data-tipo='cep']").blur(consultar_cep);
    /**
     * @param {string} date
     * @returns string
     */
    function consultar_cep() {
        var cep = $(this).val();
        cep = cep.replace("-", "");
        var urlStr = "https://viacep.com.br/ws/" + cep + "/json/";

        $.ajax({
            url: urlStr,
            type: "get",
            dataType: "json",
            success: function(data) {
                $("input[data-tipo='cidade']").val(data.localidade);
                $("input[data-tipo='estado']").val(data.uf);
                $("input[data-tipo='bairro']").val(data.bairro);
                $("input[data-tipo='endereco']").val(data.logradouro);
            },
            error: function(erro) {
                console.log(erro);
            }
        });
    }

</script>

<script>
    $(".dtsp-nameColumn").click(function() {
        console.log("clickado");
    });
</script>

<!-- /Funções -->


<!-- Custom Theme Scripts -->
<script src="{{url('admin/build/js/custom.min.js')}}"></script>
