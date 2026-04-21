<section class="section-partners bg-dark-blue -mt-[1px]">
	<div class="st-grid !px-0">
        <div class="st-container st-container-grid">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-light-blue md:font-[545] w-full"><?php esc_html_e( 'Hauptpartner', 'stricker' ) ?></p>
                <hr class="w-full border md:border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap xl:flex-nowrap">
                <?php
                $partner_query = new WP_Query(array(
                    'post_type' => 'partner',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'partner-type',
                            'field' => 'slug',
                            'terms' => 'main-partner',
                        ),
                    ),
                ));
                
                if ($partner_query->have_posts()) :
                    while ($partner_query->have_posts()) :
                        $partner_query->the_post();
                        $partner_logo = get_field('logo_edited');
                        $partner_url = get_field('website_url');
                        $overview_check = get_field('overview_page');
                        
                        if($overview_check) :
                            echo '<div class="text-center partner-card flex justify-start items-center pr-40 w-full md:w-1/2 xl:w-full">';
                            if ($partner_logo && $partner_url) :
                                echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link">' . wp_get_attachment_image( $partner_logo, 'full' ) . '</a>';
                            else :
                                echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                            endif;
                            echo '</div>';
                        endif;
                    endwhile;
                    wp_reset_postdata(); // Reset post data
                else :
                    echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
                endif;
                ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-48">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-light-blue md:font-[545] w-full"><?php esc_html_e( 'Premiumpartner', 'stricker' ) ?></p>
                <hr class="w-full border md:border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap xl:flex-nowrap">
            <?php
            $partner_query = new WP_Query(array(
                'post_type' => 'partner',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'partner-type',
                        'field' => 'slug',
                        'terms' => 'premium-partner',
                    ),
                ),
            ));
            
            if ($partner_query->have_posts()) :
                while ($partner_query->have_posts()) :
                    $partner_query->the_post();
                    $partner_logo = get_field('logo_edited');
                    $partner_url = get_field('website_url');
                    $overview_check = get_field('overview_page');
                    
                    if($overview_check) :
                        echo '<div class="text-center partner-card flex justify-start items-center pr-40 w-full md:w-1/2 xl:w-full">';
                        if ($partner_logo && $partner_url) :
                            echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link">' . wp_get_attachment_image( $partner_logo, 'full' ) . '</a>';
                        else :
                            echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                        endif;
                        echo '</div>';
                    endif;
                endwhile;
                wp_reset_postdata(); // Reset post data
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-48">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-light-blue md:font-[545] w-full"><?php esc_html_e( 'Ausrüster', 'stricker' ) ?></p>
                <hr class="w-full border md:border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap xl:flex-nowrap">
            <?php
            $partner_query = new WP_Query(array(
                'post_type' => 'partner',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'partner-type',
                        'field' => 'slug',
                        'terms' => 'supplier',
                    ),
                ),
            ));
            
            if ($partner_query->have_posts()) :
                while ($partner_query->have_posts()) :
                    $partner_query->the_post();
                    $partner_logo = get_field('logo_edited');
                    $partner_url = get_field('website_url');
                    $overview_check = get_field('overview_page');

                    if($overview_check) :
                        echo '<div class="text-center partner-card flex justify-start items-center pr-40 w-full md:w-1/2 xl:w-full">';
                        if ($partner_logo && $partner_url) :
                            echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link">' . wp_get_attachment_image( $partner_logo, 'full' ) . '</a>';
                        else :
                            echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                        endif;
                        echo '</div>';
                    endif;
                endwhile;
                wp_reset_postdata(); // Reset post data
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid">
            <div class="col-span-2 md:col-span-4 xl:col-span-10 mb-0 md:mb-14 xl:mb-48 mt-5 md:mt-14 xl:mt-20">
                <span class="st-subtitle-i text-light-blue font-[545]"><?php esc_html_e( 'Die vollständige Liste der Partner finden Sie', 'stricker' )  ?></span>
                <a href="<?php the_field( 'partners_pdf_link' ); ?>" class="st-subtitle-i font-[545] text-blue underline"><?php esc_html_e( 'hier', 'stricker' ) ?></a>
            </div>
        </div>
    </div>
</section>