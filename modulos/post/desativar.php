<?php
require '../../app/include/include.php';
 
$query = "UPDATE logtb001_posts set ativo = 0, data_desativado = now() WHERE id = ".$_GET['id']; 
$result = executarQuery($query);
$endereco = SITE_PATH."index.php";
header("Location: ".$endereco);
?>