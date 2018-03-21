<?php
require '../../app/include/include.php';
if(isset($_GET['msg']) == true && $_GET['msg'] == 1){
    $dataPagina['msg'] = "Erro ao logar.";
} else {
    $dataPagina['msg'] = "";
}
$data ['body'] = View::carregarConteudo ( 'index.view.php', $dataPagina );
View::carregarPagina ( $data );
?>