<?php
require '../../app/include/include.php';

$query = "UPDATE logtb001_posts set titulo = '".$_GET['titulo']."', descricao = '".$_GET['descricao']."' where id = ".$_GET['id']; 
$result = executarQuery($query);
$endereco = SITE_PATH."index.php";
header("Location: ".$endereco);
?>