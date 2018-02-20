<?php

define('ASSETS_URL', get_template_directory_uri() . "/assets/");

//including styles and scripts into my website
function adding_scripts_and_styles() {
  // including styles
  wp_enqueue_style('reset', ASSETS_URL . "css/reset.css", true);
  wp_enqueue_style('Fonts', ASSETS_URL . "Fonts/stylesheet.css", true);
  wp_enqueue_style('bootstrap', ASSETS_URL . "css/bootstrap.min.css", true);
  wp_enqueue_style('Icons', ASSETS_URL . "Icons/icon_style.css", true);
  wp_enqueue_style('styles', ASSETS_URL . "css/styles.css", true);
// including scripts
if(!is_admin()){
wp_enqueue_script('jquery', ASSETS_URL . "js/jquery-3.2.1.min.js", array('jquery'), true);
wp_enqueue_script('bootstrap_js', ASSETS_URL . "js/bootstrap.min.js", array('jquery'), true);
wp_enqueue_script('custom', ASSETS_URL . "js/custom.js", array('jquery'), true);
}
}
add_action('init', 'adding_scripts_and_styles');

//fucntion for disababling admin bar

//adding theme supports
function adding_theme_support() {
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('custom-logo');
}
add_action('init', 'adding_theme_support');

//registering wordpress navigation menus
function registering_nav_menus(){
  register_nav_menus(array(
    'top-right-menu' => __('This is right top menu'),
  ));
}
add_action('init', 'registering_nav_menus');
