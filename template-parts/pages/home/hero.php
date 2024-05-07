<section class="section-hero bg-dark-blue pt-80 pb-20 xl:pt-[154px] xl:pb-28">
	<div class="section__arrow-down st-grid relative items-center">
		<div class="col-span-2 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-2 xl:col-start-2 z-10 xl:absolute" style="user-select: none;">
			<p class="st-subtitle-bi-caps text-light-blue"><?php esc_html_e( 'welcome to the official site of', 'stricker' ); ?></p>
			<p class="st-title-big st-text-outline-big text-transparent"><?php esc_html_e( 'DOMINIC', 'stricker' ); ?></p>
			<p class="st-title-big st-text-outline-big text-blue"><?php esc_html_e( 'STRICKER', 'stricker' ); ?></p>
			<p class="st-body-dates text-light-blue mt-20 max-w-64 md:max-w-80 xl:max-w-none"><?php the_field( 'hero_intro_text' ) ?></p>
		</div>
		<div class="hidden xl:block xl:col-span-9 xl:col-start-4 bg-black h-[824px] top-0 right-0 w-full z-0">
		<?php
		$hero_video = get_field('hero_video');
		if( $hero_video ): ?>
			<video autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: none;">
				<source src="<?php echo esc_url($hero_video['url']); ?>" type="<?php echo esc_attr($hero_video['mime_type']); ?>">
				Your browser does not support the video tag.
			</video>
		<?php endif; 
		?>
		</div>
	</div>
	<div class="info-box relative st-grid z-20 -mt-9">
		<div class="hidden xl:flex justify-center col-span-4 col-start-5">
			<div class="bg-blue rounded-[40.5px] w-[500px] h-[75px] grid grid-cols-7">
				<div class="col-span-1 flex flex-col justify-center items-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/info.svg" alt="info" title="info" />
				</div>
				<div class="col-span-2 flex flex-col justify-center">
					<?php
						$tournament_query = new WP_Query(array(
							'post_type' => 'tournament', 
							'posts_per_page' => 1,
						));
						if ($tournament_query->have_posts()) :
							while ($tournament_query->have_posts()) :
								$tournament_query->the_post();
						?>
								<p class="font-transducer font-bold text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e( 'Current Tournament', 'stricker' ); ?></p>
								<p class="font-transducer font-[500] text-[16px] uppercase text-light-blue underline"><?php the_title(); ?></p>
								<p class="font-transducer font-bold text-[10px] leading-[14px] text-dark-blue"><?php echo get_field('start_date'); ?></p>
						<?php
							endwhile;
							wp_reset_postdata();
						else :
						?>
							<p class="font-transducer font-bold text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
							<p class="font-transducer font-[500] text-[16px] uppercase text-light-blue underline"><?php esc_html_e( 'No Current Tournament', 'stricker' ); ?></p>
							<p class="font-transducer font-bold text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
						<?php
						endif;
                    ?>
				</div>
				<div class="col-span-1"></div>
				<div class="col-span-2 flex flex-col justify-center">
					<?php
						$tournament_query = new WP_Query(array(
							'post_type' => 'tournament', 
							'posts_per_page' => 1,
						));
						if ($tournament_query->have_posts()) :
							while ($tournament_query->have_posts()) :
								$tournament_query->the_post();
						?>
								<p class="font-transducer font-normal text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e( 'Next Tournament', 'stricker' ); ?></p>
								<p class="font-transducer font-[500] text-[16px] uppercase text-light-blue"><?php the_title(); ?></p>
								<p class="font-transducer font-normal text-[10px] leading-[14px] text-dark-blue"><?php echo get_field('start_date'); ?></p>
						<?php
							endwhile;
							wp_reset_postdata();
						else :
						?>
							<p class="font-transducer font-normal text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
							<p class="font-transducer font-[500] text-[16px] uppercase text-light-blue"><?php esc_html_e( 'No Tournament', 'stricker' ); ?></p>
							<p class="font-transducer font-normal text-[10px] leading-[14px] text-dark-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
						<?php
						endif;
                    ?>
				</div>
				<div class="col-span-1"></div>
			</div>
		</div>
	</div>
</section>