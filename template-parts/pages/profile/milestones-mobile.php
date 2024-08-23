<section class="section-milestones-mobile relative bg-[#DFF4F7] block xl:hidden">
        <div class="grid grid-cols-2 md:grid-cols-6 px-0 md:px-0">

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-6 px-6 md:px-0 bg-dark-blue">
                <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-2 flex flex-col justify-center py-12">
                    <p class="st-title text-blue mb-5"><?php the_field( 'milestones_intro_title' ); ?></p>
                    <p class="st-subtitle-i text-light-blue mb-8 max-w-[65%]"><?php the_field( 'milestones_intro_subtitle' ); ?></p>
                    <p class="st-body-dates text-light-blue max-w-[55%]"><?php the_field( 'milestones_intro_text' ); ?></p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 bg-[#DFF4F7] pb-12 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image_intro = get_field( 'milestones_content_image_1' );
                    if ( $image_intro ) : ?>
                        <?php echo wp_get_attachment_image( $image_intro, 'full', false, array( 'class' => 'w-full object-cover md:-ml-24' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-4 flex flex-col md:justify-start items-start px-6 max-w-[85%]">
                    <p class="st-subtitle-i w-fit">
                        <?php 
                        $milestones_text = get_field('milestones_content_text_1');
                        $milestones_text = preg_replace('/<br\s*\/?>/i', '', $milestones_text);
                        echo $milestones_text;
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 px-6 bg-[#DFF4F7] pb-12 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-4 flex flex-col md:justify-start items-start max-w-[75%]">
                    <p class="st-subtitle-i mb-4 md:mb-24">
                        <?php 
                        $milestones_text_2 = get_field('milestones_content_text_2');
                        $milestones_text_2 = preg_replace('/<br\s*\/?>/i', '', $milestones_text_2);
                        echo $milestones_text_2;
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 px-6 bg-[#DFF4F7] pb-16 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_3' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-w-[90%]' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-1 md:col-span-4 flex flex-col md:justify-end items-end max-w-[90%]">
                    <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_3' ); ?></p>
                </div>
                <div class="col-span-1 md:col-span-3 xl:col-span-3 z-10 -mt-20">
                    <?php 
                    $image = get_field( 'milestones_content_image_3-2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 px-6 bg-[#DFF4F7] pb-12 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_4' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-4 flex flex-col md:justify-start items-start max-w-[90%]">
                    <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_4' ); ?></p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 px-6 bg-[#DFF4F7] pb-12 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_5' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-4 flex flex-col md:justify-start items-start max-w-[80%]">
                    <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_5' ); ?></p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 px-6 bg-[#DFF4F7] pb-16 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10 flex justify-end">
                    <?php 
                    $image = get_field( 'milestones_content_image_6' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-w-[90%]' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-1 md:col-span-3 xl:col-span-3 z-10 -mt-20">
                    <?php 
                    $image = get_field( 'milestones_content_image_6-2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-1 md:col-span-4 flex flex-col md:justify-start items-start">
                    <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_6' ); ?></p>
                </div>
            </div>
            
            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 px-6 bg-[#DFF4F7] pb-12 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_7' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-4 flex flex-col md:justify-start items-start">
                    <p class="st-subtitle-i mb-4 md:mb-24 max-w-[70%]">
                        <?php 
                        $milestones_text_3 = get_field('milestones_content_text_7');
                        $milestones_text_3 = preg_replace('/<br\s*\/?>/i', '', $milestones_text_3);
                        echo $milestones_text_3;
                        ?>
                    </p>
                </div>
            </div>
            
            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 px-6 bg-[#DFF4F7] py-0 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_7-2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-w-[90%]' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-1 md:col-span-4 flex flex-col md:justify-end items-end">
                    <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_8' ); ?></p>
                </div>
                <div class="col-span-1 md:col-span-3 xl:col-span-3 z-10 -mt-20">
                    <?php 
                    $image = get_field( 'milestones_content_image_8' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-4 flex flex-col md:justify-center items-center pt-12 pb-20">
                    <img class="max-w-[170px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/site-logo.svg" alt="logo" title="logo" />
                </div>
            </div>


        </div>
</section>