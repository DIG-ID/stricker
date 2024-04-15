<?php
/**
 * Setup theme
 */
function stricker_theme_setup() {

	register_nav_menus(
		array(
			'main-menu'        => __( 'Main Menu', 'stricker' ),
			'menu-footer'      => __( 'Menu Footer', 'stricker' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	// Update thumbnail size.
	update_option( 'thumbnail_size_w', 737 );
	update_option( 'thumbnail_size_h', 200 );
	update_option( 'thumbnail_crop', true );

	// Update medium size.
	update_option( 'medium_size_w', 956 );
	update_option( 'medium_size_h', 500 );

	// Update large size.
	update_option( 'large_size_w', 1920 );
	update_option( 'large_size_h', 800 );

	//add_image_size( 'image-square', 1024, 1024, array( 'center', 'center' ) );


}

add_action( 'after_setup_theme', 'stricker_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function stricker_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

	register_sidebar(
		array(
			'name'          => 'Header Language Switcher',
			'id'            => 'header_ls',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

add_action( 'widgets_init', 'stricker_theme_footer_widgets_init' );


/**
 * Enqueue styles and scripts
 */
function stricker_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, false );
	
}

add_action( 'wp_enqueue_scripts', 'stricker_theme_enqueue_styles' );

/**
 * Remove <p> Tag From Contact Form 7.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function stricker_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'stricker_theme_lower_yoast_metabox_priority' );


// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';
