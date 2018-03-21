<?php
require '../../app/include/include.php';

$query = "INSERT INTO logtb001_posts (titulo, descricao, data) VALUES ('".$_GET['titulo']."','".$_GET['descricao']."', now())"; 
$result = executarQuery($query);
$endereco = SITE_PATH."index.php";
header("Location: ".$endereco);
?>