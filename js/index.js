$('.input-fone').mask('(00) 000-000-000');

const enviaContato = () => {

    const nome = document.getElementById('contato-nome').value;
    const mail = document.getElementById('contato-mail').value;
    const fone = document.getElementById('contato-fone').value;
    const msg = document.getElementById('contato-msg').value;

    //TODO:VERIFICACAO
    const nomeOk = nome.length > 0;
    const mailOk = mail.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) != null;
    const foneOk = fone.match(/^\(\d{2}\)\ [\d]{3}-[\d]{3}-[\d]{3}$/) != null;
    const mensagemOk = msg.length > 0;

    if ( nomeOk && mailOk && foneOk && mensagemOk ) {
        $.ajax('../ajax/mail.php',{
            method: 'post',
            data: { nome: nome, mail: mail, fone: fone, msg: msg},
            success: ( response ) => {
                $.notify (
                    { message: response  },
                    { type: 'success' }
                );
                ['nome','mail','fone','msg'].forEach( x => {document.getElementById('contato-'+x).value='';} );
            }, error: () => {
                alert('nao');
            }
        });
    } else {
        let msgArray = Array();
        if (!nomeOk) {
            msgArray.push('Digite seu nome.');
        }
        if (!mailOk) {
            msgArray.push('Digite seu email.');
        }
        if (!foneOk) {
            msgArray.push('Digite seu telefone para contato.');
        }
        if (!mensagemOk) {
            msgArray.push('Digite sua mensagem.');
        }
        const msg = msgArray.reduce( (acc,current) => acc + (acc.length !== 0 ? '<br/>' : '') + current );
        $.notify (
            { message: msg  },
            { type: 'danger' }
        );
    }


};