<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 12/09/18
 * Time: 18:44
 */

$contatoNome=$_POST['nome'];
$contatoMail=$_POST['mail'];
$contatoFone=$_POST['fone'];
$contatoMsg=$_POST['msg'];

$contatoMsg = str_replace('\n','\r\n',$contatoMsg);




$str =
"Uma mensagem foi enviada através do site!\r\n
Nome: $contatoNome\r\n
E-mail: $contatoMail\r\n
Telefone: $contatoFone\r\n
Mensagem: $contatoMsg";
$fname = '';
$contador = 1;
while (empty($fname) || file_exists($fname)) {
    $dthr = date('Y-m-d_H_i_s', time());
    $fname = '../contato/' . $dthr . '_' . $contador;
    $contador++;
}
$ret=file_put_contents($fname,$str);
if ($ret !== false) {
    $resp = [
        "success"=> true,
        "message" =>"Olá, $contatoNome<br/>Obrigada por entrar em contato.<br/>Em breve entrarei em contato com você."
    ];
    echo json_encode($resp);
} else {
    $mailOk = [mail("psi_camila@hotmail.com", "MENSAGEM NO SITE", $str), mail("brlaranjeira@gmail.com", "MENSAGEM NO SITE", $str)];
    $mailOk = $mailOk[0] && $mailOk[1];
    $msg = $mailOk ?
        "Olá, $contatoNome<br/>Obrigada por entrar em contato.<br/>Em breve entrarei em contato com você." :
        "Houve um erro ao tentar enviar sua mensagem.";
    $resp = [
        "success" => $mailOk,
        "message" => $msg
    ];
    echo json_encode($resp);
}
