<?php

function theme_styles() {
	global $wp_styles;

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'oswald_font_css', 'http://fonts.googleapis.com/css?family=PT+Sans|Oswald:400,700|Fjalla+One' );
	wp_enqueue_style( 'raleway_font_css', 'http://fonts.googleapis.com/css?family=Raleway:400,500,300|Open+Sans:400,600,700' );
	wp_enqueue_style( 'lora_font_css', 'http://fonts.googleapis.com/css?family=Lora' );

	wp_register_style( 'ie_css', get_template_directory_uri() . '/css/ie.css' );

	$wp_styles->add_data( 'ie_css', 'conditional', 'lt IE 9' );
	$wp_styles->enqueue(array('ie_css'));


}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv',  get_template_directory_uri() . '/js/html5.js', '', '', false );
	wp_register_script( 'respond_js', get_template_directory_uri() . '/js/respond.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'pre_js', get_template_directory_uri() . '/js/pre_custom.js', array('jquery'), '', false );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

	register_nav_menus(
			array(
				'menu-left' => __( 'Left Menu' ),
				'menu-right' => __( 'Right Menu' ),
				'menu-footer' => __( 'Footer Menu' )
				)
		);

}
add_action( 'init', 'register_theme_menus' );

function restrict_embed_width() {
	return array( 'width' => 400, 'height' => 250 );
}

// add_filter( 'embed_defaults', 'restrict_embed_width' );

function create_widget($name, $id, $description) {

	register_sidebar(array(
			'name' => __( $name ),
			'id' => $id,
			'description' => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));
}

/*   Home Page Column-4 widgets     */

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

/*   Sidebar widgets     */

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays side content on blog pages.' );




?>