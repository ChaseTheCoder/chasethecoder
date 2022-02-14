<?php

function portfolio_files(){

  wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/css/style.css'  );
}

add_action('wp_enqueue_scripts', 'portfolio_files');

function portfolio_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'portfolio_features');

function register_theme_styles() {
  wp_register_style( 'theme-styles', site_url( '/css/style.css' ) );
  wp_enqueue_style( 'theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'register_theme_styles' );