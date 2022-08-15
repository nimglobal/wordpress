<?php
  /*
    Plugin Name: wordpress
    Plugin URI: http://127.0.0.1:8080
    Description: Plugin de ejemplo para crear un plugin en WordPress
    Version: 1.0
    Author: Nimrod
    Author URI: http://127.0.0.1:8080
    License: GPL2
  */

  defined('ABSPATH') or die("Bye bye");
  define('WP_RUTA',plugin_dir_path(__FILE__));

  include(WP_RUTA . 'includes/funciones.php');
  include(WP_RUTA.'/includes/opciones.php');
?>