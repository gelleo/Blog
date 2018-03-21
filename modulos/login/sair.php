<?php
require '../../app/include/include.php';
$_SESSION["logado"] = false;
$endereco = SITE_PATH."index.php";
header("Location: ".$endereco);