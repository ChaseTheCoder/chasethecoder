<?php

function portfolio_files(){
  //called wp function and pointed to file.
  wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'portfolio_files');