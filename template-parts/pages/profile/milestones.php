<section class="section-milestones relative bg-[#DFF4F7]">
    <div class="scroll-section relative h-[101vh]">
        <div class="panel w-[100vw] md:w-[130vw] xl:w-[100vw] st-grid !px-0">
            <div class="col-span-1 md:col-span-4 xl:col-span-7 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-7 gap-6 xl:gap-8 px-6 md:px-0 bg-dark-blue">
                <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-2 flex flex-col justify-center pt-40 pb-36">
                    <p class="st-title text-blue mb-5"><?php the_field( 'milestones_intro_title' ); ?></p>
                    <p class="st-subtitle-i text-light-blue text-wrap mb-28"><?php the_field( 'milestones_intro_subtitle' ); ?></p>
                    <p class="st-body-dates text-light-blue text-wrap"><?php the_field( 'milestones_intro_text' ); ?></p>
                </div>
                <div class="absolute bottom-12 left-[40%] z-10 hidden md:block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/section-arrow-right.svg" alt="arrow-right" title="arrow right" />
                </div>
            </div>

            <div class="col-span-1 md:col-span-2 xl:col-span-5 col-start-2 md:col-start-5 xl:col-start-8 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-5 gap-6 xl:gap-8 px-6 md:px-0 bg-[#DFF4F7] pt-40 pb-36">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 z-10">
                <?php 
                    $image_intro = get_field( 'milestones_content_image_1' );
                    if ( $image_intro ) : ?>
                        <?php echo wp_get_attachment_image( $image_intro, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
                </div>
                <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-2 xl:col-end-5 flex flex-col justify-end items-end">
                    <p class="st-subtitle-i w-fit"><?php the_field( 'milestones_content_text_1' ); ?></p>
                </div>
            </div>
        </div>

        <div class="panel st-grid w-[100vw] md:w-[130vw] xl:w-[100vw] pt-40 pb-36 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-4 xl:col-span-4">
                <p class="st-subtitle-i mb-24"><?php the_field( 'milestones_content_text_2' ); ?></p>
                <?php 
                    $image = get_field( 'milestones_content_image_2' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
            </div>
            <div class="col-span-1 md:col-span-2 xl:col-span-3 col-start-2 md:col-start-5 xl:col-start-7">
                <?php 
                    $image = get_field( 'milestones_content_image_3' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
                <p class="st-subtitle-i mb-24"><?php the_field( 'milestones_content_text_3' ); ?></p>
            </div>
        </div>

        <div class="panel st-grid w-[100vw] md:w-[130vw] xl:w-[100vw] pt-40 pb-36 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-4 xl:col-span-4">
                <p class="st-subtitle-i mb-24"><?php the_field( 'milestones_content_text_4' ); ?></p>
                <?php 
                    $image = get_field( 'milestones_content_image_4' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
            </div>
            <div class="col-span-1 md:col-span-2 xl:col-span-3 col-start-2 md:col-start-5 xl:col-start-7">
                <?php 
                    $image = get_field( 'milestones_content_image_5' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
                <p class="st-subtitle-i mb-24"><?php the_field( 'milestones_content_text_5' ); ?></p>
            </div>
        </div>

        <div class="panel st-grid w-[100vw] md:w-[130vw] xl:w-[100vw] pt-40 pb-36 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-4 xl:col-span-4">
                <p class="st-subtitle-i mb-24"><?php the_field( 'milestones_content_text_6' ); ?></p>
                <?php 
                    $image = get_field( 'milestones_content_image_6' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
            </div>
            <div class="col-span-1 md:col-span-2 xl:col-span-3 col-start-2 md:col-start-5 xl:col-start-7">
                <?php 
                    $image = get_field( 'milestones_content_image_7' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
                <p class="st-subtitle-i mb-24"><?php the_field( 'milestones_content_text_7' ); ?></p>
            </div>
        </div>

        <div class="panel st-grid w-[100vw] md:w-[150vw] xl:w-[100vw] pt-40 pb-36 bg-[#DFF4F7]">
            <div class="col-span-1 md:col-span-4 xl:col-span-4">
                <p class="st-subtitle-i mb-24"><?php the_field( 'milestones_content_text_8' ); ?></p>
                
            </div>
            <div class="col-span-1 md:col-span-2 xl:col-span-3 col-start-2 md:col-start-5 xl:col-start-7">
                <?php 
                    $image = get_field( 'milestones_content_image_8' );
                    if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
            </div>
        </div>
    </div>
</section>
