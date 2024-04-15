<header id="main-header" class="main-header" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar fixed-top navbar-dark" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'digid' ); ?>">
		<div class="container">
			<div class="site-branding">
				<a class="navbar-brand" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>">
					
				</a>
			</div>
			<div class="navbar-actions">
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
					<span class="icon-left"></span>
					<span class="icon-right"></span>
				</button>
				<?php do_action( 'wpml_add_language_selector' ); ?>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'main-menu',
						'menu_id'         => 'main-menu',
						'container_class' => '',
						'menu_class'      => 'main-menu-top-level',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'     => '__return_false',
					)
				);
				?>
			</div>
		</div>
	</nav>
</header>
