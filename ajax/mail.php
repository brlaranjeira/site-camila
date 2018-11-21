<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 12/09/18
 * Time: 18:44
 */
<<<<<<< HEAD

echo "Sua mensagem foi enviada.<br/>Entrarei em contato em breve.";
=======
$contatoNome=$_POST['nome'];
$contatoMail=$_POST['mail'];
$contatoFone=$_POST['fone'];
$contatoMsg=$_POST['msg'];
$str =
"Uma mensagem foi enviada através do site!
Nome: $contatoNome
E-mail: $contatoMail
Telefone: $contatoFone
Mensagem: $contatoMsg";
$mailOk = mail ( "brlaranjeira@gmail.com" , "MENSAGEM NO SITE" , $str);
$resp = ["success"=> $mailOk];
echo json_encode($resp);
>>>>>>> origin
