
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