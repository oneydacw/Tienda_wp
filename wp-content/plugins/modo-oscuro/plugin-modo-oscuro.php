<?php

//Plugin name: MOdo oscuro
//description : Activa el  modo oscuro
//version : 1.0
//author : Oneyda
//Autor URI: https://github.com/oneydacw

function estilos_plugin() {
    $estilos_url = plugin_dir_url(__FILE__);

    wp_enqueue_style('modo_oscuro', $estilos_url.'/assets/estilo.css', '', '1.0', 'all');
}

/* hook */

add_action('wp_enqueue_scripts', 'estilos_plugin');
