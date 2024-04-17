<section class="section-hero bg-dark-blue">
	<div class="st-grid relative items-center">
		<div class="col-span-2 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-2 xl:col-start-2 z-10 absolute" style="user-select: none;">
			<p class="st-subtitle-bi-caps text-light-blue"><?php esc_html_e( 'welcome to the official site of', 'stricker' ); ?></p>
			<p class="st-title-big st-text-outline-big text-transparent"><?php esc_html_e( 'DOMINIC', 'stricker' ); ?></p>
			<p class="st-title-big st-text-outline-big text-blue"><?php esc_html_e( 'STRICKER', 'stricker' ); ?></p>
			<p class="st-body-dates text-light-blue mt-20"><?php the_field( 'hero_intro_text' ) ?></p>
		</div>
		<div class="hidden xl:block xl:col-span-9 xl:col-start-4 bg-black h-[824px] top-0 right-0 w-full z-0">
		<?php
		$hero_video = get_field('hero_video');
		if( $hero_video ): ?>
			<video autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover;">
				<source src="<?php echo esc_url($hero_video['url']); ?>" type="<?php echo esc_attr($hero_video['mime_type']); ?>">
				Your browser does not support the video tag.
			</video>
		<?php endif; 
		?>
		</div>
	</div>
</section>