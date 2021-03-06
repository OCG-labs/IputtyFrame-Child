<?php

require_once('addons/widgets.php');

//Enque chid app.js for user created js/jQuery functions 

if(!is_admin()){
     function load_user_js() {
     	wp_register_script('usrapp_js', get_stylesheet_directory_uri().'/addons/js/app.js', array("jquery"), '1.0.0', true);
     	wp_register_script('isotope_js', get_stylesheet_directory_uri().'/addons/js/jquery.isotope.js', array("jquery"), '1.5.25', true);
     	
     	wp_enqueue_script('usrapp_js');
     	wp_enqueue_script('isotope_js');
     }
     add_action('init', 'load_user_js');
}

function remove_parent_actions() {
     //remove_action('navbar_top', 'navbar_project_blog_name', 1);
     //remove_action('navbar_bottom', 'navbar_searchbar', 5);
}
add_action( 'init', 'remove_parent_actions' );