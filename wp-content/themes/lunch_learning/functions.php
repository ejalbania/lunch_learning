<?php 

function lunchLearning_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lunchLearning_resources');

// Navigation Menu
register_nav_menus(array(
		'primary' => __("Header MenuBar"),
		'footer' => __("Footer MenuBar")
	));

 ?>
