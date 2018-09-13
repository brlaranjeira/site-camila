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
$str =
"Uma mensagem foi enviada através do site!
Nome: $contatoNome
E-mail: $contatoMail
Telefone: $contatoFone
Mensagem: $contatoMsg";
$mailOk = mail ( "psi_camila@hotmail.com" , "MENSAGEM NO SITE" , $str);
