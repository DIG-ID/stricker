<section class="section-autograph bg-dark-blue py-44 xl:py-72 -my-1">
    <div class="st-grid">
        <div class="col-span-2 md:col-span-6 xl:col-span-8 col-start-1 md:col-start-1 xl:col-start-3 flex justify-center">
            <div class="circle-mask w-[686px] h-[686px] overflow-hidden relative hover:w-[770px] hover:h-[770px]" style="border-radius: 50%;">
                <?php 
                $image = get_field( 'tour_autograph_image' );
                if ( $image ) :
                ?>
                    <div class="w-[770px] h-[770px] bg-cover bg-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded" style="background-image: url('<?php echo esc_url(wp_get_attachment_image_url( $image, 'full' )); ?>'); border-radius: 50%;"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

