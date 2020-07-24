/*  
 *Arquivo com conjunto de funções usadas em todo o desenvolvimento do sistema EDUCACRATO.
 *Essas funções são carregadas no footer do sistema
 */
//Mascaras
$('#esc_lf_lc_cep').mask('00000-000');
$(".unidade-medida").mask("#.00", {reverse: true});




function isEmpty(value) {
    return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
}


//Funcao responsável por limpar o formulario, inclusive mudando o background quando ele for obrigatório
function limparForm(valor) {
    $(valor)[0].reset();
    $("#" + valor.attr('id') + ' select').change();

}
function valoresPadrao(form) {
    $(".tab_default").click();
    
    $(form).find('option').each(function () {
        if ($(this).hasClass('select-padrao')) {
            $(this).prop('select', true);
        }
    });
    $(form).find('label, textarea, input').each(function () {
        //Tratando os inputs disabled
        if ($(this).hasClass('input-disable')) {
            $(this).prop('disabled', true);
        }
        //Tratando os inputs readonly
        if ($(this).hasClass('input-readonly')) {
            $(this).prop('readonly', true);
        }
        //Tratando os botoes padrao
        if ($(this).hasClass('radio-padrao')) {
            $(this).click();
        }

    });
}