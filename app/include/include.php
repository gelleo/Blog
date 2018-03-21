<?php
session_start();
define('VERSAO', 'v1.16');

$url = $_SERVER ['PHP_SELF'];
$pos2 = stripos ( $url, "/blog" );
$url2 = substr ( $url, $pos2 );
$quantidade = substr_count ( $url2, "/" );

$path = "";
for ($i = $quantidade; $i >= 3; $i--)
{
    $path .= "../";
}
define("SITE_PATH", $path);

include SITE_PATH.'lib/config/config.php';
include SITE_PATH.'app/bd/class.mysql.php';
include SITE_PATH.'app/view/class.view.php';
?>