<?php

/**
 * This function open the main content.
 */
function theme_before_main_content() {
	?>
	<main id="main-content" class="main-content overflow-hidden mt-auto">
	<?php
}

add_action( 'before_main_content', 'theme_before_main_content' );

/**
 * This function closes the main content.
 */
function theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'theme_after_main_content' );

/**
 * This function open the post content.
 */
function theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'theme_before_post_content' );

/**
 * This function closes the post content.
 */
function theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'theme_after_post_content' );


/**
 * This theme logo.
 */
function theme_logo() {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89 50" fill="none" class="ds-logo-icon"><path d="M0 15.8833L6.89697 18.9794V25.0909L78.6566 31.982V34.3455C78.4501 37.7449 75.6219 40.4468 72.1727 40.4468H16.3966V28.7336L0.00146606 27.2361L6.89843 30.13V49.949H72.1742C81.0074 49.949 88.1694 42.7853 88.1694 33.9469V24.6177L0.00293213 15.8833H0Z" fill="#14A5BB"></path><path d="M88.1665 21.8953L78.6669 20.9443V16.002C78.6669 12.4195 75.7523 9.50363 72.1712 9.50363H16.3951V14.6599L6.89551 13.7924V0H72.1712C80.9913 0 88.1665 7.17828 88.1665 16.002V21.8938V21.8953Z" fill="#14A5BB"></path></svg>
	<?php
}

add_action( 'theme_logo', 'theme_logo' );

/**
 * This theme logo for mobile.
 */
function theme_logo_mobile() {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" id="hotel-schoenegg-logo-mobile" x="0" y="0" version="1.1" viewBox="0 0 237.2 19.2" class="max-w-full object-cover w-full h-auto"><path fill="#484848" d="M0 18.8v-.6h2V4.4H0v-.6h7.3v.6h-2v6.4h6V4.4h-2v-.6h7.3v.6h-2v13.8h2v.6H9.3v-.6h2v-6.7h-6v6.7h2v.6H0zM19.8 11.3c0-2.3.7-4.1 2.2-5.6 1.4-1.4 3.3-2.2 5.7-2.2s4.3.7 5.7 2.2c1.4 1.4 2.2 3.3 2.2 5.6s-.7 4.2-2.2 5.6C32 18.3 30.1 19 27.7 19s-4.3-.7-5.7-2.2c-1.5-1.4-2.2-3.2-2.2-5.5zm3.7 0v1.5c0 .4.1.9.2 1.5s.2 1.1.4 1.6c.2.4.4.9.7 1.3.3.4.7.7 1.2.9.5.2 1 .3 1.7.3.6 0 1.2-.1 1.7-.3.5-.2.9-.5 1.2-.9.3-.4.5-.8.7-1.3.2-.4.3-1 .4-1.6.1-.6.1-1.1.2-1.5V9.9c0-.4-.1-.9-.2-1.5s-.2-1.1-.4-1.6c-.2-.4-.4-.9-.7-1.3-.3-.4-.7-.7-1.2-.9-.5-.2-1-.3-1.7-.3-.6 0-1.2.1-1.7.3-.5.2-.9.5-1.2.9-.3.4-.5.8-.7 1.3-.2.4-.3 1-.4 1.6-.1.6-.1 1.1-.2 1.5v1.4zM42.4 18.8v-.6h2V4.4h-.8c-1.4 0-2.5.4-3.2 1.3-.7.9-1.1 1.9-1.1 3.1h-.6v-5h14.7v5.1h-.6c0-1.2-.4-2.3-1.1-3.1s-1.8-1.3-3.2-1.3h-.8v13.8h2v.6h-7.3zM55.9 18.8v-.6h2V4.4h-2v-.6h13v4.7h-.6c-.3-1.5-.8-2.6-1.8-3.2-.9-.6-2.2-.9-3.8-.9h-1.5v6.4c2.3 0 3.5-1 3.5-3h.6v6.8h-.6c0-1.2-.3-2-.9-2.5s-1.4-.7-2.6-.7v6.7h2.2c.6 0 1.2-.1 1.8-.2.6-.1 1.1-.4 1.6-.7s1-.8 1.3-1.4c.3-.6.6-1.3.7-2.2h.6v5.1H55.9zM72.4 18.8v-.6h2V4.4h-2v-.6h7.3v.6h-2v13.8h2.5c.6 0 1.2-.1 1.8-.2.6-.1 1.1-.4 1.6-.7.5-.3 1-.8 1.3-1.4.3-.6.6-1.4.7-2.3h.6v5.2H72.4zM96.5 18l-.2-4.3h.7c.1 1.2.5 2.2 1.4 3.1.8.9 1.9 1.4 3.2 1.4.9 0 1.7-.2 2.3-.6.6-.4.9-1 .9-1.9 0-.7-.3-1.2-.9-1.7s-1.3-.8-2.1-1.1-1.6-.6-2.4-1c-.8-.3-1.5-.8-2.1-1.5S96.5 9 96.5 8s.3-1.9.8-2.6 1.1-1.2 1.8-1.5c.7-.3 1.5-.4 2.3-.4 1.2 0 2.6.3 4.2.9l.2 3.6h-.7c-.2-1.1-.7-2-1.4-2.7-.7-.7-1.6-1.1-2.6-1.1-.7 0-1.3.2-1.7.6-.4.4-.7 1-.7 1.6 0 .6.3 1.1.8 1.5.6.4 1.2.8 2 1 .8.3 1.6.6 2.4 1 .8.4 1.5.9 2 1.6.6.7.8 1.6.8 2.7 0 1.3-.5 2.4-1.6 3.3-1 .9-2.3 1.3-3.9 1.3-1.6.2-3.2-.1-4.7-.8zM123.8 4.7V9h-.6c-.1-1.3-.6-2.5-1.5-3.4-.9-1-2-1.4-3.2-1.4-3.1 0-4.6 2.4-4.6 7.1v1.2c0 .4.1.8.1 1.3.1.5.2 1 .3 1.4.1.4.3.8.5 1.2.2.4.5.8.8 1 .3.3.7.5 1.2.7.5.2 1 .3 1.6.3 1.2 0 2.3-.5 3.3-1.4 1-1 1.5-2.1 1.7-3.4h.6v4.2c-2 .8-3.9 1.2-5.7 1.2-2.4 0-4.3-.7-5.7-2.2-1.4-1.4-2.2-3.3-2.2-5.6s.7-4.1 2.2-5.6c1.4-1.4 3.3-2.2 5.7-2.2 1.5.1 3.3.5 5.5 1.3zM126.9 18.8v-.6h2V4.4h-2v-.6h7.3v.6h-2v6.4h6V4.4h-2v-.6h7.3v.6h-2v13.8h2v.6h-7.3v-.6h2v-6.7h-6v6.7h2v.6h-7.3zM146.7 11.3c0-2.3.7-4.1 2.2-5.6 1.4-1.4 3.3-2.2 5.7-2.2s4.3.7 5.7 2.2c1.4 1.4 2.2 3.3 2.2 5.6s-.7 4.2-2.2 5.6c-1.4 1.4-3.3 2.2-5.7 2.2s-4.3-.7-5.7-2.2c-1.5-1.5-2.2-3.3-2.2-5.6zm3.7 0v1.5c0 .4.1.9.2 1.5s.2 1.1.4 1.6c.2.4.4.9.7 1.3.3.4.7.7 1.2.9.5.2 1 .3 1.7.3.6 0 1.2-.1 1.7-.3.5-.2.9-.5 1.2-.9.3-.4.5-.8.7-1.3.2-.4.3-1 .4-1.6.1-.6.1-1.1.2-1.5V9.9c0-.4-.1-.9-.2-1.5s-.2-1.1-.4-1.6c-.2-.4-.4-.9-.7-1.3-.3-.4-.7-.7-1.2-.9-.5-.2-1-.3-1.7-.3-.6 0-1.2.1-1.7.3-.5.2-.9.5-1.2.9-.3.4-.5.8-.7 1.3-.2.4-.3 1-.4 1.6-.1.6-.1 1.1-.2 1.5v1.4zm1-8.9c-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4s.7.1 1 .4c.3.3.4.6.4 1s-.1.7-.4 1c-.3.3-.6.4-1 .4s-.8-.2-1-.4zm4.4 0c-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4s.7.1 1 .4c.3.3.4.6.4 1s-.1.7-.4 1c-.3.3-.6.4-1 .4s-.8-.2-1-.4zM165.5 18.8v-.6h2.1V4.4h-2.1v-.6h6l7.6 9.9V4.4h-2.3v-.6h5.1v.6h-2.1V19l-.5.1-11.1-14v13h2.3v.6h-5zM184.4 18.8v-.6h2V4.4h-2v-.6h13v4.7h-.6c-.2-1.5-.8-2.6-1.7-3.2-.9-.6-2.2-.9-3.8-.9h-1.5v6.4c2.3 0 3.5-1 3.5-3h.6v6.8h-.6c0-1.2-.3-2-.9-2.5s-1.4-.7-2.6-.7v6.7h2.2c.6 0 1.2-.1 1.8-.2.6-.1 1.1-.4 1.6-.7s1-.8 1.3-1.4c.3-.6.6-1.3.7-2.2h.6v5.1h-13.6zM211 12v-.6h7v.6h-1.8v5.3c-2.6 1.2-4.9 1.8-6.8 1.8-2.4 0-4.3-.7-5.7-2.1-1.4-1.4-2.2-3.3-2.2-5.7 0-2.3.8-4.2 2.4-5.6s3.6-2.1 6-2.1c1.6 0 3.5.3 5.5 1v3.8h-.6c-.2-1.3-.7-2.3-1.5-3.1-.8-.8-1.9-1.2-3.1-1.2-1 0-1.9.2-2.6.6-.7.4-1.2.9-1.6 1.6-.4.7-.6 1.4-.8 2.2-.2.8-.2 1.7-.2 2.7v1.2c0 .4.1.8.1 1.3.1.5.2 1 .3 1.4.1.4.3.8.5 1.2.2.4.5.8.8 1 .3.3.7.5 1.1.7.5.2 1 .3 1.6.3 1.1 0 1.9-.2 2.6-.6.6-.4 1-1.1 1-1.9V12h-2zM230.2 12v-.6h7v.6h-1.8v5.3c-2.6 1.2-4.9 1.8-6.8 1.8-2.4 0-4.3-.7-5.7-2.1-1.4-1.4-2.2-3.3-2.2-5.7 0-2.3.8-4.2 2.4-5.6s3.6-2.1 6-2.1c1.6 0 3.5.3 5.5 1v3.8h-.6c-.2-1.3-.7-2.3-1.5-3.1-.8-.8-1.9-1.2-3.1-1.2-1 0-1.9.2-2.6.6-.7.4-1.2.9-1.6 1.6-.4.7-.6 1.4-.8 2.2-.2.8-.2 1.7-.2 2.7v1.2c0 .4.1.8.1 1.3.1.5.2 1 .3 1.4.1.4.3.8.5 1.2.2.4.5.8.8 1 .3.3.7.5 1.1.7.5.2 1 .3 1.6.3 1.1 0 1.9-.2 2.6-.6.6-.4 1-1.1 1-1.9V12h-2z"/></svg>
	<?php
}

add_action( 'theme_logo_mobile', 'theme_logo_mobile' );

/**
 * Get our socials from the theme customizer and display them.
 */
function ds_theme_socials() {
	$instagram_url = get_field( 'socials_instagram', 'options' );
	$facebook_url  = get_field( 'socials_facebook', 'options' );
	$x_url         = get_field( 'socials_x', 'options' );
	$linkedin_url  = get_field( 'socials_linkedin', 'options' );


	$social_output = '<div class="socials-wrapper">';


	if ( $instagram_url ) :
		$social_output .= '<a href="' . esc_url( $instagram_url ) . '" target="_blank" class="social-link social-link__instagram"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" fill="none"><path fill="#E0F2F6" d="M16 0c-4.345 0-4.89.017-6.596.093C7.7.168 6.537.431 5.52.814a7.857 7.857 0 0 0-2.834 1.788A7.59 7.59 0 0 0 .84 5.347C.445 6.333.175 7.46.096 9.11.018 10.763 0 11.29 0 15.5c0 4.21.018 4.737.096 6.39.078 1.65.349 2.777.744 3.762a7.562 7.562 0 0 0 1.846 2.745 7.884 7.884 0 0 0 2.834 1.789c1.018.383 2.18.645 3.884.72 1.706.077 2.25.094 6.596.094 4.345 0 4.89-.017 6.596-.093 1.703-.075 2.867-.338 3.884-.721a7.857 7.857 0 0 0 2.834-1.788 7.59 7.59 0 0 0 1.846-2.745c.395-.986.665-2.113.744-3.763.078-1.653.096-2.18.096-6.39 0-4.21-.018-4.737-.096-6.39-.078-1.65-.349-2.777-.744-3.763a7.563 7.563 0 0 0-1.846-2.745A7.885 7.885 0 0 0 26.48.814C25.463.431 24.3.17 22.596.094 20.89.016 20.346 0 16 0Zm0 2.793c4.272 0 4.778.016 6.465.09 1.56.07 2.407.321 2.971.534a4.97 4.97 0 0 1 1.84 1.16c.56.542.907 1.059 1.197 1.782.22.546.48 1.366.55 2.878.078 1.634.094 2.124.094 6.263 0 4.139-.016 4.629-.093 6.263-.071 1.512-.332 2.332-.55 2.878a4.784 4.784 0 0 1-1.198 1.783 4.97 4.97 0 0 1-1.84 1.16c-.564.212-1.41.464-2.97.533-1.688.074-2.194.09-6.466.09s-4.778-.016-6.465-.09c-1.56-.07-2.407-.321-2.971-.534a4.97 4.97 0 0 1-1.84-1.16 4.784 4.784 0 0 1-1.197-1.781c-.22-.547-.48-1.367-.55-2.879-.078-1.634-.094-2.125-.094-6.263 0-4.139.016-4.629.093-6.263.071-1.512.332-2.332.55-2.878.29-.724.638-1.24 1.198-1.783a4.978 4.978 0 0 1 1.84-1.16c.564-.212 1.41-.464 2.97-.533 1.688-.074 2.194-.09 6.466-.09Z"/><path fill="#E0F2F6" d="M16 20.667c-2.946 0-5.334-2.314-5.334-5.167 0-2.854 2.388-5.167 5.334-5.167 2.946 0 5.334 2.313 5.334 5.167 0 2.854-2.388 5.167-5.334 5.167ZM16 7.54c-4.538 0-8.216 3.563-8.216 7.959 0 4.396 3.678 7.959 8.216 7.959 4.538 0 8.216-3.563 8.216-7.96 0-4.395-3.678-7.958-8.216-7.958Zm10.461-.315c0 1.027-.86 1.86-1.92 1.86s-1.92-.833-1.92-1.86c0-1.028.86-1.86 1.92-1.86s1.92.832 1.92 1.86Z"/></svg></a>';
	endif;
	if ( $facebook_url ) :
		$social_output .= '<a href="' . esc_url( $facebook_url ) . '" target="_blank" class="social-link social-link__facebook"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" fill="none"><path fill="#E0F2F6" d="M32 15.557C32 6.966 24.837 0 16 0 7.164 0 0 6.966 0 15.557c0 7.296 5.165 13.418 12.134 15.1V20.31h-3.3v-4.754h3.3V13.51c0-5.296 2.465-7.75 7.812-7.75 1.013 0 2.763.193 3.478.387v4.31c-.378-.039-1.034-.058-1.849-.058-2.624 0-3.637.966-3.637 3.478v1.681h5.227l-.898 4.754h-4.328V31C25.86 30.07 32 23.51 32 15.557H32Z"/></svg></a>';
	endif;
	if ( $x_url ) :
		$social_output .= '<a href="' . esc_url( $x_url ) . '" target="_blank" class="social-link social-link__x"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="none"><path fill="#E0F2F6" d="M18.449 13.126 29.989 0h-2.734l-10.02 11.397L9.23 0H0l12.103 17.235L0 31h2.735l10.582-12.036L21.77 31H31L18.45 13.126h-.001Zm-3.745 4.26-1.227-1.716L3.72 2.015h4.2l7.874 11.021 1.227 1.716 10.235 14.326h-4.2l-8.352-11.69v-.001Z"/></svg></a>';
	endif;
	if ( $linkedin_url ) :
		$social_output .= '<a href="' . esc_url( $linkedin_url ) . '" target="_blank" class="social-link social-link__facebook"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" fill="none"><path fill="#E0F2F6" d="M29.633 0H2.36C1.06 0 0 1 0 2.235v26.529C0 29.998 1.059 31 2.36 31h27.273C30.938 31 32 29.997 32 28.764V2.235C32 1.001 30.937 0 29.633 0ZM9.493 26.415h-4.75V11.622h4.75v14.793ZM7.119 9.601c-1.525 0-2.754-1.195-2.754-2.666 0-1.472 1.23-2.666 2.754-2.666s2.75 1.194 2.75 2.666C9.87 8.406 8.637 9.6 7.12 9.6Zm20.15 16.814h-4.745v-7.194c0-1.715-.03-3.922-2.466-3.922-2.436 0-2.846 1.87-2.846 3.8v7.317H12.47V11.622h4.55v2.022h.064c.633-1.163 2.182-2.39 4.49-2.39 4.806 0 5.694 3.064 5.694 7.048v8.113h.002Z"/></svg></a>';
	endif;

	$social_output .= '</div>';

	echo $social_output;
}

add_action( 'socials', 'ds_theme_socials' );

/**
 * Implement and customize Yoast Breadcrumbs.
 */
function bz_theme_breadcrumbs() {
	if ( function_exists( 'yoast_breadcrumb' ) ) :
		add_filter( 'wpseo_breadcrumb_separator', function( $separator ) {
			return '<span class="breadcrumbs-separator"><svg id="breadcrumbs-icon-separator" xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none"><path d="M1 9L4.67453 5.70707C5.10849 5.31818 5.10849 4.68182 4.67453 4.29293L1 1" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg></span>';
		} );
		yoast_breadcrumb( '<p id="breadcrumbs"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" id="breadcrumbs-icon-home"><g stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#000000"> <path d="M7.846 2.574a.25.25 0 01.308 0l5.25 4.12a.25.25 0 01.096.196v7.36a.75.75 0 001.5 0V6.89a1.75 1.75 0 00-.67-1.377L9.08 1.394a1.75 1.75 0 00-2.16 0l-5.25 4.12A1.75 1.75 0 001 6.89v7.36a.75.75 0 001.5 0V6.89a.25.25 0 01.096-.196l5.25-4.12z"></path> <path d="M6.5 14.25V10.5h3v3.75a.75.75 0 001.5 0v-4C11 9.56 10.44 9 9.75 9h-3.5C5.56 9 5 9.56 5 10.25v4a.75.75 0 001.5 0z"></path> </g> </g></svg>', '</p>' );
	endif;
}

add_action( 'breadcrumbs', 'bz_theme_breadcrumbs' );

/**
 * Implement custom made WPML Language Switcher.
 */
/*function az_theme_custom_ls() {
	global $sitepress;
	$az_ls = $sitepress->get_ls_languages();

	if ( ! empty( $az_ls ) ) :
		echo '<ul class="az-custom-language-switcher-menu">';
		$first_lng = array_shift( $az_ls );
		echo '<li class="dropdown"><a href="' . $first_lng['url'] . '" aria-haspopup="true">' . strtoupper( $first_lng['code'] ) . '</a>';
		if ( ! empty( $az_ls ) ) :
			echo '<ul class="dropdown-content" aria-label="submenu">';
			foreach ( $az_ls as $lng ) :
				echo '<li><a href="' . $lng['url'] . '">' . strtoupper( $lng['code'] ) . '</a></li>';
			endforeach;
			echo '</ul>';
		endif;
		echo '</li></ul>';
	endif;

}

add_action( 'az_ls', 'az_theme_custom_ls' );*/
