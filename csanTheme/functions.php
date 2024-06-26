<?php
function add_widget_support() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}

$date = new DateTime();

add_action( 'widgets_init', 'add_widget_support' );

function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'add_Main_Nav' );

function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

add_action('wp_enqueue_scripts', 'add_normalize_CSS');