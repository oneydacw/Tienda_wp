<?php

function  init_template(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');



register_nav_menus(
    array(
        'top_menu' => 'Menu Principal' //ver refresh la pagina para visualizar el menu en la barra lateral wp
    )
    );
}
add_action('after_setup_theme', 'init_template');

function assets(){
    //dependencias para que se cargue antes
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"','','5.0.2','all');
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap','','1.0','all');
    
    wp_enqueue_style('estilos',get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0', 'all');
    wp_register_script('pooper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js','','1.16.0',true);
    
    //CARGAR EL SOURCES JUNTO CON LAS DEPENDENCIAS
    wp_enqueue_script('bootstraps', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js',array('jquery','popper'),'5.0.2',true);

    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js','','1.0',true);
}
add_action('wp_enqueue_scripts','assets'); 
//activar widget
function sidebar(){
    register_sidebar(
    array(
    'name' => 'Pie de pagina',
    'id'   => 'footer',
    'description' => 'Zona de Widgets para pie de pagina',
    'before_title' => '<p>',
    'after_title' => '</p>',
    'before_widget' => '<div id="%1$s"  class="%2$s">',
    'after_widget' => '</div>'
    )
    );
}
add_action('widgets_init', 'sidebar');//inicializar en el code fuente de wp

function productos_type(){
    $labels = array(
        'name' => 'Productos',
        'singular_name' => 'Producto',
        'manu_name' => 'Productos',
    );
    $args = array(
        'labels' => 'Productos',
        'description' => 'Productos de Platzi',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'public' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart', //icons de wp
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite' => true, //activar el editor de guttenberg
        'show_in_rest' => true
    );
    register_post_type('producto', $args);
    
}
add_action('init', 'productos_type');
