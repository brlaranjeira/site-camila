const enviaContato = () => {
    const nome = document.getElementById('contato-nome').value;
    const mail = document.getElementById('contato-email').value;
    const fone = document.getElementById('contato-fone').value;
    const msg = document.getElementById('contato-mensagem').value;
    $.ajax('../ajax/mail.php',{
        method: 'post',
        data: { nome: nome, mail: mail, fone: fone, msg: msg},
        success: (response) => {
            alert(response);
        }, error: (response) => {
            debugger;
        }
    });
}