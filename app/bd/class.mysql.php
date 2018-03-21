<?php
function executarQuery($query){
    $link = mysql_connect ( SERVIDOR, USUARIO_BANCO, SENHA_BANCO );
    if (! $link) {
        die ( 'Não foi possível conectar: ' . mysql_error () );
    }
    mysql_select_db ( BANCO_DADOS, $link );
    //$query = "Select id, titulo, descricao, data FROM logtb001_posts where ativo = 1 order by data desc";
    $result = mysql_query ( $query );
    if (! $result) {
        die ( 'Invalid query: ' . mysql_error () );
    }
    mysql_close ( $link );
    return $result;
}