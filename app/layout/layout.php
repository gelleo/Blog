<?php
$query = "Select id, titulo, descricao, data FROM logtb001_posts where ativo = 1 order by data desc";
$result = executarQuery($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Gelleo</title>
<link rel="stylesheet" href="<?php echo SITE_PATH; ?>app/css/layout-2018-2.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="<?php echo SITE_PATH; ?>app/js/datatable/datatables.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="<?php echo SITE_PATH; ?>app/js/datatable/DataTables-1.10.16/css/jquery.dataTables.min.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script src="<?php echo SITE_PATH; ?>app/js/jquery/jquery-3.3.1.min.js"></script>
<script src="<?php echo SITE_PATH; ?>app/js/datatable/datatables.min.js"></script>
<script src="<?php echo SITE_PATH; ?>app/js/tinymce/tinymce.min.js"></script>
<script src="<?php echo SITE_PATH; ?>app/js/geral.js"></script>
</head>
<body id="main">
    <div id="box">
        <div id="head">
            <div id="title">
                <h1 id="nome-titulo">Gelleo</h1>
                <small>Programação.</small>
            </div>
            <div id="nav">
                <ul>
                    <li>
                        <a href="<?php echo SITE_PATH; ?>index.php">Início</a>
                    </li>
                    <?php
                    if (isset($_SESSION ["logado"]) == true && $_SESSION ["logado"] == true) {
                        echo '<li> ';
                        echo '<a href="'.SITE_PATH.'modulos/post/cadastrar.php">Novo Post</a>';
                        echo '</li>';
                        echo '<li> ';
                        echo '<a href="'.SITE_PATH.'modulos/post/listar.php">Listar Posts</a>';
                        echo '</li>';
                    }
                    ?>
                    <li>
                    <?php
                    if (isset($_SESSION ["logado"]) == true && $_SESSION ["logado"] == true) {
                        echo '<a href="'.SITE_PATH.'modulos/login/sair.php">Sair</a>';
                    } else {
                        echo '<a href="'.SITE_PATH.'modulos/login/index.php">Entrar</a>';
                    }
                    ?>
                    </li>
                </ul>
            </div>
        </div>
        <div id="content">
           <?php echo $body; ?>
        </div>
        <div id="footer">&copy; 2018, Gelleo. Blog <?php echo VERSAO; ?></div>
    </div>
</body>
</html>