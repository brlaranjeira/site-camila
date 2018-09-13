<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 12/09/18
 * Time: 18:44
 */
echo "print 1<br/>";
$mailOk = mail ( "brlaranjeira@gmail.com" , "TESTE" , "TESTE");
echo "print 2<br/>";
echo $mailOk . "<br/>";