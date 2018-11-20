$('.input-fone').mask('(00) 000-000-000');

const enviaContato = () => {
    const nome = document.getElementById('contato-nome').value;
    const mail = document.getElementById('contato-mail').value;
    const fone = document.getElementById('contato-fone').value;
    const msg = document.getElementById('contato-msg').value;
    debugger;
    $.ajax('../ajax/mail.php',{
        method: 'post',
        data: { nome: nome, mail: mail, fone: fone, msg: msg},
        success: () => {
            alert('foifoi');
        }, error: () => {
            alert('naaaaao');
        }
    });
}