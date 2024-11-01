<?php
/*
Plugin Name: WI Games Shortcode
Plugin URI: http://wi-games.com/start/wordpress-shortcode-plugin-install
Description: WI Games Shortcode – allows you to easy and quickly insert any game placed on wigames.net!
Version: 1.0
Author: WI Games
Author URI: http://wi-games.com
*/

add_shortcode('wigames', 'shortcode_wigames');

function shortcode_wigames($atts) {
	extract(shortcode_atts(array(
		"id" => 11,
		"width" => 0,
		"height" => 0
		), $atts));
	
	if ($width > 0) {
		$pw = '&width='.$width;
	};
	
	if ($height > 0) {
		$ph = '&height='.$height;
	};
	wp_enqueue_script('wi-game-em-'.$id, 'http://wigames.net/embed?id='.$id.$pw.$ph);

	return '<div id="wi-game-em-'.$id.'"></div>';
}

?>