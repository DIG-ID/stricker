<section class="section-milestones bg-dark-blue">
    <div class="scroll-section h-[101vh]">
        <div class="panel w-[100vw] st-grid">
            <div class="col-span-2 md:col-span-6 xl:col-span-7 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-7 gap-6 xl:gap-8 px-6 md:px-0 bg-dark-blue">
                <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-2 flex flex-col justify-center pt-40 pb-36">
                    <p class="st-title text-blue"><?php the_field( 'milestones_intro_title' ); ?></p>
                    <p class="st-subtitle-big text-light-blue text-wrap"><?php the_field( 'milestones_intro_subtitle' ); ?></p>
                    <p class="st-body-dates text-light-blue text-wrap"><?php the_field( 'milestones_intro_text' ); ?></p>
                </div>
            </div>

            <div class="col-span-2 md:col-span-6 xl:col-span-5 col-start-1 md:col-start-2 xl:col-start-8 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-5 gap-6 xl:gap-8 px-6 md:px-0 bg-[#DFF4F7]">
                <div class="col-span-2 md:col-span-3 xl:col-span-3 pt-40 pb-36 z-10">
                <?php 
                    $image_intro = get_field( 'milestones_content_image_1' );
                    if ( $image_intro ) : ?>
                        <?php echo wp_get_attachment_image( $image_intro, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                    <?php endif;
                ?>
                </div>
                <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-2 xl:col-end-5 pt-40 pb-36 flex flex-col justify-end items-end">
                    <p class="st-subtitle-i"><?php the_field( 'milestones_content_text_1' ); ?></p>
                </div>
                <div class="hidden xl:block xl:col-span-2 xl:col-start-11 h-full"></div>
            </div>
        </div>

        <div class="panel st-grid w-[100vw] pt-40 pb-36 bg-[#DFF4F7]">
            <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-2">
                <p class="st-title text-blue"><?php the_field( 'milestones_intro_title' ); ?></p>
                <p class="st-subtitle-big text-light-blue text-wrap"><?php the_field( 'milestones_intro_subtitle' ); ?></p>
                <p class="st-body-dates text-light-blue text-wrap"><?php the_field( 'milestones_intro_text' ); ?></p>
            </div>
            <div class="col-span-2 md:col-span-3 xl:col-span-3 col-start-1 md:col-start-2 xl:col-start-7">
            <?php 
                $image_intro = get_field( 'milestones_content_image_1' );
                if ( $image_intro ) : ?>
                    <?php echo wp_get_attachment_image( $image_intro, 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
                <?php endif;
            ?>
            </div>
        </div>
    </div>
</section>
