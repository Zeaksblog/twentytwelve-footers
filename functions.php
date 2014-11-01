<?php

// Register footer widgets
register_sidebar( array(
	'name' => __( 'Footer Widget One', 'mytheme' ),
	'id' => 'sidebar-5',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'mytheme' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => __( 'Footer Widget Two', 'mytheme' ),
	'id' => 'sidebar-6',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Center Footer Widget.', 'mytheme' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => __( 'Footer Widget Three', 'mytheme' ),
	'id' => 'sidebar-7',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Right Footer Widget.', 'mytheme' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );