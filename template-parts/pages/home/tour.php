<section class="section-tour relative py-12 bg-blue overflow-hidden w-[105%] z-10 transform rotate-1 origin-top-left -mt-32">
    <div class="st-grid">
        <div class="col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
        <div class="col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
        <div class="col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
        <div class="col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
        <div class="col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
        <div class="col-span-2 flex flex-row justify-between"><span class="st-title !font-[418] text-light-blue"><?php esc_html_e( 'On Tour', 'stricker' ) ?></span><span class="st-title text-light-blue">•</span></div>
    </div>
</section>
<section class="section-schedule bg-dark-blue py-44">
    <div class="st-grid">
        <div class="col-span-1 md:col-span-4 xl:col-span-9 col-start-1 md:col-start-2 xl:col-start-2 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-9">
            <div class="col-span-1 pt-14">
                <img class="float-left" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/cup.svg" alt="tournament cup" title="tournament cup">
                <p class="float-left st-subtitle-big-regular text-blue transform -rotate-90 ml-3"><?php esc_html_e( 'Tournaments', 'stricker' ) ?></p>
            </div>
            <div class="col-span-3">
                <p class="font-transducerCondensed text-[26px] italic font-[340px] leading-9 tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-5"><?php esc_html_e( 'Last', 'stricker' ) ?></p>
                <div class="py-11 border-b-2 border-blue">
                    <?php
                    // Query posts from the "tournament" custom post type
                    $tournament_query = new WP_Query(array(
                        'post_type' => 'tournament', // Your custom post type slug
                        'posts_per_page' => 1, // Display only one post
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
                        <p class="st-body-dates text-blue">Custom start date</p>
                        <p class="st-subtitle-caps text-light-blue">Custom tournament title</p>
                        <p class="st-subtitle text-blue">Custom location</p>
                    <?php
                    endif;
                    ?>
                </div>

            </div>
            <div class="col-span-2">
                <p class="font-transducerCondensed text-[26px] italic font-[340px] leading-9 tracking-[10.4px] text-blue uppercase border-b-[10px] border-blue pb-[16px]"><?php esc_html_e( 'Current', 'stricker' ) ?></p>
                <div class="py-[42px] border-b-2 border-blue">
                    <p class="st-body-dates text-blue"><?php esc_html_e( '-', 'stricker' ) ?></p>
                    <p class="st-subtitle-caps text-light-blue"><?php esc_html_e( 'No Current Tournament', 'stricker' ) ?></p>
                    <p class="st-subtitle text-blue"><?php esc_html_e( '-', 'stricker' ) ?></p>
                </div>
            </div>
            <div class="col-span-1">
                <p class="font-transducerCondensed text-[26px] italic font-[340px] leading-9 tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-5"><?php esc_html_e( '&nbsp;', 'stricker' ) ?></p>
                <div class="py-11 border-b-2 border-blue">
                    <p class="st-body-dates text-blue invisible"><?php esc_html_e( '-', 'stricker' ) ?></p>
                    <p class="st-subtitle-caps text-light-blue invisible"><?php esc_html_e( '-', 'stricker' ) ?></p>
                    <p class="st-subtitle text-blue invisible"><?php esc_html_e( '-', 'stricker' ) ?></p>
                </div>
            </div>
            <div class="col-span-2">
                <p class="font-transducerCondensed text-[26px] italic font-[340px] leading-9 tracking-[10.4px] text-blue uppercase border-b-2 border-blue pb-5"><?php esc_html_e( 'Next', 'stricker' ) ?></p>
                <div class="py-11 border-b-2 border-blue">
                    <p class="st-body-dates text-blue"><?php esc_html_e( '-', 'stricker' ) ?></p>
                    <p class="st-subtitle-caps text-light-blue"><?php esc_html_e( 'To be announced', 'stricker' ) ?></p>
                    <p class="st-subtitle text-blue"><?php esc_html_e( '-', 'stricker' ) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>