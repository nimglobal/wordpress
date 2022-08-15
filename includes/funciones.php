<?php

    function wp_nuevos_botones($botones) 
    {	
    $botones[] = 'fontselect';
    $botones[] = 'fontsizeselect';
    $botones[] = 'underline';
    return $botones;
    }

    add_filter( 'mce_buttons_3','wp_nuevos_botones');

?>