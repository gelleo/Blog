<?php
require '../../app/include/include.php';
$query = "Select id, titulo, descricao, data FROM logtb001_posts where ativo = 1 order by data desc";
$result = executarQuery($query);
$dataPagina['result'] = $result;
$data ['body'] = View::carregarConteudo ( 'cadastrar.view.php', $dataPagina );
View::carregarPagina ( $data );
?>