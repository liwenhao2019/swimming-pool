<?php 

require_once('class_wp_bootstrap_navwalker.php');

function theme_setup(){
    // Featured Image Support
    add_theme_support('post-thumbnails');
	register_nav_menus(array(
    'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'theme_setup');