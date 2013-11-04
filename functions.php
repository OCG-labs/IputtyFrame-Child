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
