<?php
function gutenberg_portfolio_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'gutenberg_portfolio_theme_setup' );

function gutenberg_portfolio_enqueue_styles() {
    wp_enqueue_style( 'gutenberg_portfolio-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'gutenberg_portfolio_enqueue_styles' );
?>
