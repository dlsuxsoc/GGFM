<?php

function load_stylesheets(){
    wp_register_style('main_css', get_template_directory_uri() . '/assets/css/main.css', array(), 1, 'all');
    wp_enqueue_style('main_css');

    wp_register_style('slick_css', get_template_directory_uri() . '/assets/slick-plugin/slick/slick.css', array(), 1, 'all');
    wp_enqueue_style('slick_css');
    
    wp_register_style('slick_theme', get_template_directory_uri() . '/assets/slick-plugin/slick/slick-theme.css', array(), 1, 'all');
    wp_enqueue_style('slick_theme');

    wp_register_style('audio_css', get_template_directory_uri() . '/assets/clean-audio-player-plugin/audioplayer.css', array(), 1, 'all');
    wp_enqueue_style('audio_css');

    

}
add_action('wp_enqueue_scripts', 'load_stylesheets');






function load_js(){
    
    wp_register_script('slick_js', get_template_directory_uri() . '/assets/slick-plugin/slick/slick.js', array('jquery'));
    wp_enqueue_script('slick_js');

    wp_register_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'));
    wp_enqueue_script('main_js');

    wp_register_script('audio_js', get_template_directory_uri() . '/assets/clean-audio-player-plugin/audioplayer.js', array('jquery'));
    wp_enqueue_script('audio_js');
}
add_action('wp_enqueue_scripts', 'load_js');


