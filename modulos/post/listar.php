<?php
require '../../app/include/include.php';
$query = "Select id, titulo, descricao, data, ativo, data_desativado FROM logtb001_posts order by data desc";
$result = executarQuery($query);
$dataPagina['result'] = $result;

$data ['body'] = View::carregarConteudo ( 'listar.view.php', $dataPagina );
View::carregarPagina ( $data );
?>