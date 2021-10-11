<?php
// WP Title
add_theme_support( 'title-tag' );

// Register Menu
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
// Post Thumbnail
add_theme_support( 'post-thumbnails' );
?>