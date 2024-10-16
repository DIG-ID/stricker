<div <?php post_class( 'card-team col-span-1 md:col-span-4 xl:col-span-3 mb-11 xl:mb-24 bg-light-blue' ); ?>>
    <div class="text-center">
    <?php 
        $image = get_sub_field('picture');
        $size = 'team-picture';
        if ( $image ) :
            echo wp_get_attachment_image( $image, $size, false, array( 'class' => 'object-cover w-full' ) );
        else : ?>
            <div class="featured-image mb-4">
                <img src="https://placehold.co/533x655" class="object-cover w-full size-team-picture">
            </div>
        <?php endif; ?>
        <div class="w-full bg-light-blue pt-3 md:pt-8">
            <p class="st-body-dates text-dark-blue md:mb-2"><?php the_sub_field( 'title' ); ?></p>
            <h2 class="st-subtitle-big text-blue"><?php the_sub_field( 'name' ); ?></h2>
        </div>
    </div>
</div>