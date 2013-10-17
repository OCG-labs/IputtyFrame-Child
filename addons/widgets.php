<?php

function remove_some_widgets(){
	unregister_sidebar( 'primary-widget-area' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );


if(function_exists('register_sidebar')) {
	register_sidebar( array (
		'name' => __('Homepage Event Widget 1', 'event-widget-1'), 
		'id' => 'home-event-widget-1', 
		'description' => __('Homepage event widget 1', 'dir'), 
		'before_widget' => '<div id="home_event_1">', 
		'after_widget' => '</div>'
	) );
}