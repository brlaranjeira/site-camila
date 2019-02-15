<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 15/02/19
 * Time: 13:34
 */


function getOutContent($f) {
    $dia = substr($f,0,10);
    $campos = explode('-',$dia);
    $dia = $campos[2] . '/' . $campos[1] . '/' . $campos[0];
    $hora = substr($f,11,8);
    $hora = str_replace('_',':',$hora);
    echo "Dia $dia as $hora<br/>";
    $fcontent =  file_get_contents('./contato/'.$f);
    $fcontent = nl2br($fcontent);
    echo $fcontent . '<br/>';
    echo '<hr/>';
}

$ok = false;
if (isset($_POST['pw'])) {
    $h = hash('sha256', $_POST['pw']);
    if ( $h === '298691fc1301724ebc68e81e4cbd193675f58c6c74eb19f8065aa6bd305a5a8d' ) {
        $ok = true;
        $diretorio = opendir('./contato/');
        $fname = readdir($diretorio);
        $arquivos = [];
        while ($fname !== false) {
            if ($fname !== '.' && $fname !== '..') {
                //echo $fname . '<br/>';
                $arquivos[] = $fname;
            }
            $fname = readdir($diretorio);
        }
        sort($arquivos,SORT_STRING);
        $arquivos = array_reverse($arquivos);
        foreach ($arquivos as $arquivo) {
            getOutContent($arquivo);
        }
    }
}
if (!$ok) {
    ?>
    <form action="" method="post">
        <label for="">C&oacute;digo de Autentica&ccedil;&atilde;o</label>
        <input name="pw" id="pw" type="password" />
        <input type="submit" value="Entrar" />
    </form>
    <?
}