<script src="{{url('template/assets/js/jquery.min.js')}}"></script>
<script src="{{url('template/assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('template/assets/js/plugins.js')}}"></script>
<script src="{{url('template/assets/js/slick.min.js')}}"></script>
<!-- jQuery Mask -->
<script src="{{url('admin/assets/js/jquery.mask.min.js')}}"></script>
<script src="{{url('template/assets/js/custom.js')}}"></script>


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

    /**
     * @param {string} email 
     * @returns boolean
     */
    function is_email_valid(email) {
        console.log("email is valid?", email);
        let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
        return regex.test(email);
    }

    /**
     * @param {string} cpf 
     * @returns boolean
     */
    function is_cpf_valid(inputCPF){
        var soma = 0;
        var resto;
        var inputCPF = document.getElementById('cpf').value;

        if(inputCPF == '00000000000') return false;
        for(i=1; i<=9; i++) soma = soma + parseInt(inputCPF.substring(i-1, i)) * (11 - i);
        resto = (soma * 10) % 11;

        if((resto == 10) || (resto == 11)) resto = 0;
        if(resto != parseInt(inputCPF.substring(9, 10))) return false;

        soma = 0;
        for(i = 1; i <= 10; i++) soma = soma + parseInt(inputCPF.substring(i-1, i))*(12-i);
        resto = (soma * 10) % 11;

        if((resto == 10) || (resto == 11)) resto = 0;
        if(resto != parseInt(inputCPF.substring(10, 11))) return false;
        return true;
    }

    /**
     * @param {string} cep 
     * @returns boolean
     */
    function is_cep_valid(cep) {
        let regex = new RegExp("[0-9]{5}-[0-9]{3}");
        return regex.test(cep);
    }

</script>
<!-- /Funções -->
