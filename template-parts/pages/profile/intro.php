<section class="section-intro bg-dark-blue">
	<div class="st-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-7">
        <?php 
            $image_intro = get_field( 'intro_image' );
            if ( $image_intro ) : ?>
                <?php echo wp_get_attachment_image( $image_intro, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
            <?php endif;
        ?>
        </div>
        <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-9 flex flex-col justify-center items-center">
            <p class="st-subtitle-big text-light-blue"><?php the_field( 'intro_text_1' ); ?></p>
            <p class="st-subtitle-big text-blue"><?php the_field( 'intro_text_2' ); ?></p>
        </div>
    </div>
</section>