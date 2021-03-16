<?php

function agregarCSSyJS(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    wp_enqueue_script( 'bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.0', true);
}
add_action('wp_enqueue_scripts', 'agregarCSSyJS');
?>
