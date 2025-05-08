<?php
// Cargar estilos del tema padre
add_action( 'wp_enqueue_scripts', 'mistify_child_enqueue_styles' );
function mistify_child_enqueue_styles() {
    wp_enqueue_style( 'mistify-parent-style', get_template_directory_uri() . '/style.css' );
}

