<header id="main-header" class="main-header" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar fixed-top navbar-dark bg-dark-blue" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'digid' ); ?>">
		<div class="grid grid-cols-5 py-[42px]">
			<div class="col-span-2 flex justify-start">
				<div class="navbar-actions">
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
						<span class="icon-left"></span>
						<span class="icon-right"></span>
					</button>
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
			<div class="col-span-1 flex justify-center">
				<div class="site-branding">
					<div class="navbar-brand custom-logo-link max-w-[88px]"><?php the_custom_logo(); ?></div>
				</div>
			</div>
			<div class="col-span-2 flex justify-end">
				<?php do_action( 'wpml_add_language_selector' ); ?>
			</div>
		</div>
	</nav>
</header>
