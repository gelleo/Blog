<?php
require '../../app/include/include.php';

if (isset ( $_GET ['login'] ) == true && isset ( $_GET ['senha'] ) == true) {
    $query = "Select id FROM logtb002_usuarios where login = '" . $_GET ['login'] . "' AND senha = '" . md5($_GET ['senha'])."'";
    $result = executarQuery ( $query );
    if ($row = mysql_fetch_assoc ( $result )) {
        $_SESSION ["logado"] = true;
        $endereco = SITE_PATH . "index.php";
        header ( "Location: " . $endereco );
    } else {
        $_SESSION ["logado"] = false;
        $endereco = SITE_PATH . "modulos/login/index.php?msg=1";
        header ( "Location: " . $endereco );
    }
} else {
    $_SESSION ["logado"] = false;
    $endereco = SITE_PATH . "modulos/login/index.php?msg=1";
    header ( "Location: " . $endereco );
}

?>