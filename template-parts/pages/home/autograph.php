<section class="section-autograph bg-dark-blue py-44 xl:py-72 -my-1">
    <div class="st-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-8 col-start-1 md:col-start-1 xl:col-start-3 flex justify-center">
            <?php 
            $image = get_field( 'tour_autograph_image' );
            if ( $image ) :
            ?>
            <div class="rounded-full overflow-hidden relative" style="width: 686px; height: 686px;">
                <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full h-full object-cover transition-transform duration-500 transform hover:scale-110 cursor-pointer z-10 relative' ) ); ?>
                <div class="mask absolute inset-0" style="background: radial-gradient(circle, transparent 50%, transparent 150%);"></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

