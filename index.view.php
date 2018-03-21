<?php
$arrayDias = [ ];
while ( $row = mysql_fetch_assoc ( $result ) ) {
    $arrayDias [$row ['data']] [] = $row;
}
foreach ( $arrayDias as $arrayDia ) {
    ?>
<div class="post-dia">
    <div class="dateset">
        <h1><?php echo key($arrayDias); ?></h1>
    </div>
                <?php
    foreach ( $arrayDias as $arrayDia ) {
        $ordenado = array_reverse ( $arrayDia );
        foreach ( $ordenado as $posts ) {
            ?>
                <div class="post">
        <div class="link item">
            <h2><?php echo $posts['titulo']; ?></h2>
            <p><?php echo $posts['descricao']; ?></p>
        </div>
    </div>
                <?php
        }
        ?>
</div>
<?php
    }
}
?>