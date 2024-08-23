<section class="section-milestones-mobile relative bg-[#DFF4F7] block xl:hidden">
        <div class="grid grid-cols-2 md:grid-cols-6 px-0 md:px-0">

            <div class="col-span-2 md:col-span-3 grid grid-cols-2 md:grid-cols-6 gap-6 px-6 md:px-0 bg-dark-blue">
                <div class="col-span-2 md:col-span-6 py-12 px-[10%] flex flex-col justify-center">
                    <p class="st-title text-blue mb-5"><?php the_field( 'milestones_intro_title' ); ?></p>
                    <p class="st-subtitle-i text-light-blue mb-8 max-w-[65%]"><?php the_field( 'milestones_intro_subtitle' ); ?></p>
                    <p class="st-body-dates text-light-blue max-w-[55%]"><?php the_field( 'milestones_intro_text' ); ?></p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-3 grid grid-cols-2 md:grid-cols-6 gap-4 bg-[#DFF4F7] pb-12 relative">
                <div class="col-span-2 md:col-span-6 z-10">
                    <?php 
                    $image_intro = get_field( 'milestones_content_image_1' );
                    if ( $image_intro ) : ?>
                        <?php echo wp_get_attachment_image( $image_intro, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-6 flex flex-col md:justify-center items-start md:items-center max-w-[85%] md:max-w-none order-2 md:order-1 px-6 md:p-6">
                    <p class="st-subtitle-i w-fit">
                        <?php 
                        $milestones_text = get_field('milestones_content_text_1');
                        $milestones_text = preg_replace('/<br\s*\/?>/i', '', $milestones_text);
                        echo $milestones_text;
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-0 px-6 md:px-0 bg-[#DFF4F7] pb-12 md:pb-0 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10 order-1 md:order-2">
                    <?php 
                    $image = get_field( 'milestones_content_image_2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-3 flex flex-col md:justify-center items-start md:items-center max-w-[75%] md:max-w-none order-2 md:order-1 p-0 md:p-6">
                    <p class="st-subtitle-i">
                        <?php 
                        $milestones_text_2 = get_field('milestones_content_text_2');
                        $milestones_text_2 = preg_replace('/<br\s*\/?>/i', '', $milestones_text_2);
                        echo $milestones_text_2;
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-0 px-6 md:px-0 bg-[#DFF4F7] pb-16 md:pb-0 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_3' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-w-[90%] md:max-w-none' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-1 md:col-span-3 flex flex-col md:justify-center items-end md:items-center max-w-[90%] md:max-w-none p-0 md:p-6">
                    <p class="st-subtitle-i"><?php the_field( 'milestones_content_text_3' ); ?></p>
                </div>
                <div class="col-span-1 md:col-span-3 xl:col-span-3 z-10 -mt-20 block md:hidden">
                    <?php 
                    $image = get_field( 'milestones_content_image_3-2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-0 px-6 md:px-0 bg-[#DFF4F7] pb-12 md:pb-0 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10 order-1 md:order-2">
                    <?php 
                    $image = get_field( 'milestones_content_image_4' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-3 flex flex-col md:justify-center items-start md:items-center max-w-[90%] md:max-w-none order-2 md:order-1 p-0 md:p-6">
                    <p class="st-subtitle-i mb-4 md:mb-24">
                        <?php 
                        $milestones_text_4 = get_field('milestones_content_text_4');
                        $milestones_text_4 = preg_replace('/<br\s*\/?>/i', '', $milestones_text_4);
                        echo $milestones_text_4;
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-0 px-6 md:px-0 bg-[#DFF4F7] pb-12 md:pb-0 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_5' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-3 flex flex-col md:justify-center items-start md:items-center max-w-[80%] md:max-w-none md:p-6">
                    <p class="st-subtitle-i mb-4 md:mb-24"><?php the_field( 'milestones_content_text_5' ); ?></p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-0 px-6 md:px-0 bg-[#DFF4F7] pb-16 md:pb-0 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10 flex justify-end order-1 md:order-3">
                    <?php 
                    $image = get_field( 'milestones_content_image_6' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-w-[90%] md:max-w-none' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-1 md:col-span-3 xl:col-span-3 z-10 -mt-20 block md:hidden order-2">
                    <?php 
                    $image = get_field( 'milestones_content_image_6-2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-1 md:col-span-3 flex flex-col md:justify-center items-start md:items-center order-3 md:order-1 md:p-6">
                    <p class="st-subtitle-i">
                        <?php 
                        $milestones_text_5 = get_field('milestones_content_text_6');
                        $milestones_text_5 = preg_replace('/<br\s*\/?>/i', '', $milestones_text_5);
                        echo $milestones_text_5;
                        ?>
                    </p>
                </div>
            </div>
            
            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-0 px-6 md:px-0 bg-[#DFF4F7] pb-12 md:pb-0 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                    <?php 
                    $image = get_field( 'milestones_content_image_7' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-3 flex flex-col md:justify-center items-start md:items-center">
                    <p class="st-subtitle-i max-w-[70%] md:max-w-none md:p-6">
                        <?php 
                        $milestones_text_3 = get_field('milestones_content_text_7');
                        $milestones_text_3 = preg_replace('/<br\s*\/?>/i', '', $milestones_text_3);
                        echo $milestones_text_3;
                        ?>
                    </p>
                </div>
            </div>
            
            <div class="col-span-2 md:col-span-6 grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-0 px-6 md:px-0 bg-[#DFF4F7] py-0 relative">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10 order-1 md:order-2">
                    <?php 
                    $image = get_field( 'milestones_content_image_7-2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover max-w-[90%] md:max-w-none' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-1 md:col-span-3 flex flex-col md:justify-center items-end md:items-center order-2 md:order-1 md:p-6">
                    <p class="st-subtitle-i"><?php the_field( 'milestones_content_text_8' ); ?></p>
                </div>
                <div class="col-span-1 md:col-span-3 xl:col-span-3 z-10 -mt-20 md:mt-0 order-3">
                    <?php 
                    $image = get_field( 'milestones_content_image_8' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                    ?>
                </div>
                <div class="col-span-2 md:col-span-3 flex flex-col md:justify-center items-center pt-12 pb-20 order-4">
                    <img class="max-w-[170px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/site-logo.svg" alt="logo" title="logo" />
                </div>
            </div>


        </div>
</section>