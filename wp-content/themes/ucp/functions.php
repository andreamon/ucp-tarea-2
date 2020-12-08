<?php

function init_template()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'init_template');

function assets()
{
    // wp_register_style('open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap', '', '1.0', 'all');
    // wp_register_style('pt-sans', 'https://fonts.googleapis.com/css2?family=PT+Sans&display=swap', '', '1.0', 'all');
    // wp_register_style('noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap', '', '1.0', 'all');
    
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/bootstrap/bootstrap.min.css','','4.5.3', 'all');

    wp_enqueue_style('estilos', get_stylesheet_uri(), '', '1.0', 'all');

    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js','','1.16.1',true);
    wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js',array('jquery','popper'),'4.5.3',true);

    wp_enqueue_script( 'custom_script', get_template_directory_uri().'/assets/js/script.js', '', '1.0', true);
    wp_enqueue_script('maps_api_script', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCF8is273-FLzCJcMCfLfuqNPowhoFraUM&callback=initMap', '','1.0',true);
}

add_action('wp_enqueue_scripts', 'assets');

function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );