<section class="page-contact-content bg-dark-blue pb-48">
	<div class="st-container-notfluid">
		<div class="st-grid">
			<div class="col-span-4 col-start-2">
				<h2 class="inline-block pr-9 font-transducerCondensed font-[545] text-white text-base md:text-[32px] leading-[19px] md:leading-[39px] italic relative after:w-full after:bg-blue after:rounded-full after:h-[2px] after:block after:mt-8 mb-20"><?php the_field( 'contacts_title' ); ?></h2>
			</div>
			<div class="col-span-6">
				<h2 class="inline-block pr-9 font-transducerCondensed font-[545] text-white text-base md:text-[32px] leading-[19px] md:leading-[39px] italic relative after:w-full after:bg-blue after:rounded-full after:h-[2px] after:block after:mt-8 mb-20"><?php the_field( 'form_title' ); ?></h2>
				<?php
				$form_sc = get_field( 'form_form_shortcode' );
				if ( ! empty( $form_sc ) ) :
					echo do_shortcode( $form_sc );
				endif;
				?>
			</div>
		</div>
	</div>
</section>