<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 15/02/19
 * Time: 13:34
 */
$ok = false;
if (isset($_POST['pw'])) {
    $h = hash('sha256', $_POST['pw']);
    if ( $h === '298691fc1301724ebc68e81e4cbd193675f58c6c74eb19f8065aa6bd305a5a8d' ) {
        $ok = true;
        $diretorio = opendir('./contato/');
        $fname = readdir($diretorio);
        while ($fname !== false) {
            if ($fname !== '.' && $fname !== '..') {
                echo $fname . '<br/>';
                echo file_get_contents('./contato/'.$fname) . '<br/>';
                echo '<hr/>';
            }
            $fname = readdir($diretorio);
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