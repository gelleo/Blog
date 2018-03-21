<?php
echo "<table class='data-table display'>";
echo "<thead>";
echo "<tr>";
echo "<th>";
echo "ID";
echo "</th>";
echo "<th>";
echo "Título";
echo "</th>";
echo "<th>";
echo "Descrição";
echo "</th>";
echo "<th>Editar</th>";
echo "<th>";
echo "Ativo";
echo "</th>";
echo "<th>Desativa do em:</th>";
echo "<th>Desativar</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while ( $row = mysql_fetch_assoc ( $result ) ) {
    if($row ['ativo'] == 1){
        $textoAtivo = "Sim";
    } else {
        $textoAtivo = "Não";
    }

    echo "<tr>";
    echo "<td>";
    echo $row ['id'];
    echo "</td>";
    echo "<td>";
    echo $row ['titulo'];
    echo "</td>";
    echo "<td>";
    echo $row ['descricao'];
    echo "</td>";
    echo "<td>";
    echo "<button type='button' class='editar-post' onclick=\"location.href='editar.php?id=" . $row ['id'] . "';\">Editar</button>";
    echo "</td>";    
    echo "<td>".$textoAtivo."</td>";
    echo "<td>".$row ['data_desativado']."</td>";
    if ($row ['ativo'] == 1) {
        echo "<td>";
        echo "<button type='button' class='desativar-post' onclick=\"location.href='desativar.php?id=" . $row ['id'] . "';\">Excluir</button>";
        echo "</td>";
    } else {
        echo "<td>";
        echo "<button type='button' class='ativar-post' onclick=\"location.href='ativar.php?id=" . $row ['id'] . "';\">Ativar</button>";
        echo "</td>";
    }
    echo "</tr>";
   
}
echo "</tbody>";
echo "<tfoot>";
echo "<tr>";
echo "<th>";
echo "ID";
echo "</th>";
echo "<th>";
echo "Título";
echo "</th>";
echo "<th>";
echo "Descrição";
echo "</th>";
echo "<th>Editar</th>";
echo "<th>";
echo "Ativo";
echo "</th>";
echo "<th>Desativa do em:</th>";
echo "<th>Desativar</th>";
echo "</tr>";
echo "</tfoot>";