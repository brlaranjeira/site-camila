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
$mailOk = mail ( "brlaranjeira@gmail.com, psi_camila@hotmail.com" , "MENSAGEM NO SITE" , $str);
$msg = $mailOk ?
    "Olá, $contatoNome<br/>Obrigada por entrar em contato.<br/>Em breve entrarei em contato com você." :
    "Houve um erro ao tentar enviar sua mensagem.";
$resp = [
    "success"=> $mailOk,
    "message" => $msg
];
echo json_encode($resp);
