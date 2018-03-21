<?php
require '../../app/include/include.php';
$query = "Select id, titulo, descricao, data, ativo, data_desativado FROM logtb001_posts where id = ". $_GET['id'];
$result = executarQuery($query);
$dataPagina['result'] = $result;
while ( $row = mysql_fetch_assoc ( $result ) ) {
    $dataPagina['id'] = $row['id'];
    $dataPagina['titulo'] = $row['titulo'];
    $dataPagina['descricao'] = $row['descricao'];
}
$data ['body'] = View::carregarConteudo ( 'editar.view.php', $dataPagina );
View::carregarPagina ( $data );
?>