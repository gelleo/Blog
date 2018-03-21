<?php
abstract class View {
    protected $file = '';
    protected $vars = array ();
    static function carregarConteudo($file = '', $vars = '') {
        if (is_array ( $vars ))
            extract ( $vars );
        ob_start ();
        require ($file);
        return ob_get_clean ();
    }
    static function carregarPagina($vars = '') {
        if (is_array ( $vars )) {
            extract ( $vars );
        }
        require (SITE_PATH . '/app/layout/layout.php');
    }
}
?>