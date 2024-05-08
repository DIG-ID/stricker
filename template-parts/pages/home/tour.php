<section class="section-tour relative py-12 bg-blue overflow-hidden w-[105%] z-10 transform rotate-1 origin-top-left xl:-mt-32">
    <div class="table-row md:grid md:grid-cols-6 xl:grid-cols-12 gap-6 xl:gap-8 px-0">
        <div class="float-left md:float-none md:col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue px-4 md:px-0">•</span></div>
        <div class="float-left md:float-none md:col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue px-4 md:px-0">•</span></div>
        <div class="float-left md:float-none md:col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue px-4 md:px-0">•</span></div>
        <div class="float-left md:float-none md:col-span-2 hidden xl:flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
        <div class="col-span-2 only-desktop hidden xl:flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
        <div class="col-span-2 only-desktop hidden xl:flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
    </div>
</section>

<section class="section-schedule bg-dark-blue pt-16 xl:pb-12 xl:pt-44">
    <div class="st-grid">
        <div class="col-span-2 md:col-span-4 xl:col-span-9 col-start-1 md:col-start-2 xl:col-start-2 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-9">
            <div class="col-span-6 xl:col-span-1 pt-14 items-center flex-col flex xl:block">
                <img class="xl:float-left w-[67px] pb-7 xl:pb-0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/cup.svg" alt="tournament cup" title="tournament cup">
                <p class="xl:float-left st-subtitle-big-regular !text-[28px] md:!text-[45px] text-blue xl:transform xl:-rotate-90 xl:ml-3 pb-10 md:pb-24 xl:pb-0"><?php esc_html_e( 'Tournaments', 'stricker' ) ?></p>
            </div>
            <div class="col-span-6 xl:col-span-3">
                <p class="font-transducerCondensed text-[14px] md:text-[26px] italic font-[340px] leading-9 tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-0 md:pb-5 text-right xl:text-left"><?php esc_html_e( 'Last', 'stricker' ) ?></p>
                <div class="pt-5 pb-8 md:py-11 xl:border-b-2 border-blue">
                    <?php
                    $tournament_query = new WP_Query(array(
                        'post_type' => 'tournament', 
                        'posts_per_page' => 1,
                    ));

                    // Check if any posts are found
                    if ($tournament_query->have_posts()) :
                        while ($tournament_query->have_posts()) :
                            $tournament_query->the_post();
                    ?>
                            <p class="st-body-dates text-blue"><?php echo get_field('start_date'); ?></p>
                            <p class="st-subtitle-caps text-light-blue"><?php the_title(); ?></p>
                            <p class="st-subtitle text-blue"><?php echo get_field('location'); ?></p>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Display custom content if no posts are found
                    ?>
                        <p class="st-body-dates text-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
                        <p class="st-subtitle-caps text-light-blue"><?php esc_html_e( 'No Current Tournament', 'stricker' ); ?></p>
                        <p class="st-subtitle text-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
                    <?php
                    endif;
                    ?>
                </div>

            </div>
            <div class="col-span-6 xl:col-span-2">
                <p class="font-transducerCondensed text-[14px] md:text-[26px] italic font-[340px] leading-9 tracking-[10.4px] text-blue uppercase border-b-[10px] border-blue pb-0 md:pb-[16px] text-right xl:text-left"><?php esc_html_e( 'Current', 'stricker' ) ?></p>
                <div class="pt-5 pb-8 md:py-[42px] xl:border-b-2 border-blue">
                    <p class="st-body-dates text-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
                    <p class="st-subtitle-caps text-light-blue"><?php esc_html_e( 'No Current Tournament', 'stricker' ); ?></p>
                    <p class="st-subtitle text-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
                </div>
            </div>
            <div class="col-span-6 xl:col-span-1 only-desktop hidden xl:block">
                <p class="font-transducerCondensed text-[14px] md:text-[26px] italic font-[340px] leading-9 tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-0 md:pb-5"><?php esc_html_e( '&nbsp;', 'stricker' ) ?></p>
                <div class="pt-5 pb-8 md:py-11 xl:border-b-2 border-blue">
                    <p class="st-body-dates text-blue invisible"><?php esc_html_e( '-', 'stricker' ); ?></p>
                    <p class="st-subtitle-caps text-light-blue invisible"><?php esc_html_e( '-', 'stricker' ); ?></p>
                    <p class="st-subtitle text-blue invisible"><?php esc_html_e( '-', 'stricker' ); ?></p>
                </div>
            </div>
            <div class="col-span-6 xl:col-span-2">
                <p class="font-transducerCondensed text-[14px] md:text-[26px] italic font-[340px] leading-9 tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-0 md:pb-5 text-right xl:text-left"><?php esc_html_e( 'Next', 'stricker' ) ?></p>
                <div class="pt-5 pb-8 md:py-11 xl:border-b-2 border-blue">
                    <p class="st-body-dates text-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
                    <p class="st-subtitle-caps text-light-blue"><?php esc_html_e( 'To be announced', 'stricker' ); ?></p>
                    <p class="st-subtitle text-blue"><?php esc_html_e( '-', 'stricker' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>