<?php

    // Top level menu del plugin
    function wp_menu_administrador()
    {
       add_menu_page(WP_PLUG,WP_PLUG,'manage_options',WP_RUTA . '/admin/configuracion.php');
       add_submenu_page(WP_RUTA . '/admin/submenu.php','Ejemplo submenu','Ejemplo submenu','manage_options',WP_RUTA . '/admin/ejemplo-submenu.php');
    }

    // El hook admin_menu ejecuta la funcion rai_menu_administrador
    add_action( 'admin_menu', 'wp_menu_administrador' );
?>