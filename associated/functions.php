<?php

//add_action( 'after_setup_theme', 'be_themes_child_theme_setup' );
//function be_themes_child_theme_setup() {
    load_child_theme_textdomain( 'be-themes', get_stylesheet_directory() . '/languages' );
//}

// function be_restore_default_gallery() {
// remove_shortcode('gallery');
// add_shortcode('gallery','gallery_shortcode');
// remove_shortcode('video');
// add_shortcode('video','wp_video_shortcode');
// }
// add_action( 'init', 'be_restore_default_gallery');

  require_once(get_stylesheet_directory().'/custom/branding.php');


  if (!function_exists( 'be_themes_fallback_nav_menu' )) {
  	function be_themes_fallback_nav_menu(){
  		// $args = array (
  		// 	'sort_column' => 'menu_order, post_title',
  		// 	'menu_class'  => 'menu left',
  		// 	'include'     => '',
  		// 	'exclude'     => '',
  		// 	'echo'        => true,
  		// 	'show_home'   => false,
  		// 	'link_before' => '',
  		// 	'link_after'  => ''
  		// );
  		// wp_page_menu($args);
  		/* echo '<a href="'.admin_url("nav-menus.php").'">SET THE MAIN MENU...</a>' ; */
  	}
  }
?>
