<?php

function load_stylesheets(){
    wp_register_style('main_css', get_template_directory_uri() . '/assets/css/main.css', array(), rand(111,9999), 'all');
    wp_enqueue_style('main_css');

    // wp_register_style('slick_css', get_template_directory_uri() . '/assets/slick-plugin/slick/slick.css', array(), 1, 'all');
    // wp_enqueue_style('slick_css');
    
    // wp_register_style('slick_theme', get_template_directory_uri() . '/assets/slick-plugin/slick/slick-theme.css', array(), 1, 'all');
    // wp_enqueue_style('slick_theme');

    // wp_register_style('audio_css', get_template_directory_uri() . '/assets/clean-audio-player-plugin/audioplayer.css', array(), 1, 'all');
    // wp_enqueue_style('audio_css');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js(){
    
    wp_register_script('slick_js', get_template_directory_uri() . '/assets/slick-plugin/slick/slick.js', array('jquery'));
    wp_enqueue_script('slick_js');

    wp_register_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'),  rand(111,9999), 'all');
    wp_enqueue_script('main_js');

    // wp_register_script('audio_js', get_template_directory_uri() . '/assets/clean-audio-player-plugin/audioplayer.js', array('jquery'));
    // wp_enqueue_script('audio_js');
}
add_action('wp_enqueue_scripts', 'load_js');
add_custom_background();

// function register_my_menu() {
//     register_nav_menu('header-menu',__( 'Header Menu' ));
//   }
// add_action( 'init', 'register_my_menu' );

// add_action( 'after_setup_theme', 'remove_default_menu', 11 );
// function remove_default_menu(){
// unregister_nav_menu('nav-wrapper');
// }
register_nav_menus( array(  
    'header' => __( 'Header Navigation')
) );