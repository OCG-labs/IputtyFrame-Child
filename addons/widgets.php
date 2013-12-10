<?php

if(function_exists('register_sidebar')) {
	register_sidebar( array (
		'name' => __('Standard Sidebar', 'standard-sidebar'), 
		'id' => 'standard-sidebar', 
		'description' => __('Standard Sidebar', 'dir'), 
		'before_widget' => '<div class="st_sidebar">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3 class="st_sidebar_title">',
		'after_title' => '</h3>'
	) );
}
