<section class="section-partners bg-white -mt-[1px]">
	<div class="st-grid">
        <div class="st-container st-container-grid">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Hauptpartner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
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
                        $partner_logo = get_the_post_thumbnail_url(get_the_ID(), ''); 
                        $partner_url = get_field('website_url');

                        echo '<div class="text-center partner-card flex justify-start items-center pr-20 w-full md:w-1/2 xl:w-full">';
                        if ($partner_logo && $partner_url) :
                            echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                        else :
                            echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                        endif;
                        echo '</div>';
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
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Premiumpartner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
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
                    $partner_logo = get_the_post_thumbnail_url(get_the_ID(), ''); 
                    $partner_url = get_field('website_url');

                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 w-full md:w-1/2 xl:w-full">';
                    if ($partner_logo && $partner_url) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
                    echo '</div>';
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
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Ausrüster', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
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
                    $partner_logo = get_the_post_thumbnail_url(get_the_ID(), ''); 
                    $partner_url = get_field('website_url');

                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 w-full md:w-1/2 xl:w-full">';
                    if ($partner_logo && $partner_url) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
                    echo '</div>';
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
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Verbandspartner / Stiftung', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
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
                        'terms' => 'verbandspartner',
                    ),
                ),
            ));
            
            if ($partner_query->have_posts()) :
                while ($partner_query->have_posts()) :
                    $partner_query->the_post();
                    $partner_logo = get_the_post_thumbnail_url(get_the_ID(), ''); 
                    $partner_url = get_field('website_url');

                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 w-full md:w-1/2 xl:w-full">';
                    if ($partner_logo && $partner_url) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
                    echo '</div>';
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
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Goldpartner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
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
                        'terms' => 'goldpartner',
                    ),
                ),
            ));
            
            if ($partner_query->have_posts()) :
                while ($partner_query->have_posts()) :
                    $partner_query->the_post();
                    $partner_logo = get_the_post_thumbnail_url(get_the_ID(), ''); 
                    $partner_url = get_field('website_url');

                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 w-full md:w-1/2 xl:w-full">';
                    if ($partner_logo && $partner_url) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
                    echo '</div>';
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
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Silberpartner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
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
                        'terms' => 'silberpartner',
                    ),
                ),
            ));
            
            if ($partner_query->have_posts()) :
                while ($partner_query->have_posts()) :
                    $partner_query->the_post();
                    $partner_logo = get_the_post_thumbnail_url(get_the_ID(), ''); 
                    $partner_url = get_field('website_url');

                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 w-full md:w-1/2 xl:w-full">';
                    if ($partner_logo && $partner_url) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
                    echo '</div>';
                endwhile;
                wp_reset_postdata(); // Reset post data
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-48 mb-0 md:mb-14 xl:mb-48">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Partner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
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
                        'terms' => 'partner',
                    ),
                ),
            ));
            
            if ($partner_query->have_posts()) :
                while ($partner_query->have_posts()) :
                    $partner_query->the_post();
                    $partner_logo = get_the_post_thumbnail_url(get_the_ID(), ''); 
                    $partner_url = get_field('website_url');

                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 w-full md:w-1/2 xl:w-full">';
                    if ($partner_logo && $partner_url) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
                    echo '</div>';
                endwhile;
                wp_reset_postdata(); // Reset post data
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>
    </div>
</section>