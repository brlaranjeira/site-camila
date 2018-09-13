const enviaContato = () => {
    const nome = document.getElementById('contato-nome').value;
    const mail = document.getElementById('contato-email').value;
    const fone = document.getElementById('contato-fone').value;
    const msg = document.getElementById('contato-mensagem').value;
    $.ajax('../ajax/mail.php',{
        method: 'post',
        data: { nome: nome, mail: mail, fone: fone, msg: msg},
        success: (response) => {
            debugger;
            response = JSON.parse(response);
            let titulo = "Obrigada!";
            let mensagem = "Sua mensagem foi enviada.<br/>Entrarei em contato assim que possível.";
            if (response.success) {
                document.getElementById('contato-nome').value = '';
                document.getElementById('contato-email').value = '';
                document.getElementById('contato-fone').value = '';
                document.getElementById('contato-mensagem').value = '';
            } else {
                $('#div-alert').removeClass('alert-success').addClass('alert-danger');
                titulo = 'Desculpe';
                mensagem = 'Sua mensagem não pode ser enviada. Tente novamente ou entre em contato diretamente';
            }
            $('#div-alert > .alert-heading').text(titulo);
            $('#div-alert > .mb-0').html(mensagem);
            $('#div-alert').addClass('alerta-visivel');
            $('#div-alert').bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", () => {
                $('#oalerta').removeClass('alerta-visivel');
                $('#div-alert').addClass('alert-success').removeClass('alert-danger');
            });

        }, error: (response) => {
            debugger;
        }
    });


    const alertar = (titulo,mensagem) => {

    }


}