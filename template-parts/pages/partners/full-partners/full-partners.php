<section class="section-partners bg-white -mt-[1px]">
	<div class="st-grid">
        <div class="st-container st-container-grid">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Hauptpartner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap">
                <?php
                $partner_query = new WP_Query(array(
                    'post_type' => 'partner',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
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
                
                        echo '<div class="text-center partner-card flex justify-start items-center pr-20 pb-14 w-full md:w-1/2 xl:w-[25%]">';
                        if (!empty($partner_logo) && !empty($partner_url)) :
                            echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                        elseif (!empty($partner_logo) && empty($partner_url)) :
                            echo '<p class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></p>';
                        else :
                            echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                        endif;
                
                        echo '</div>';
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
                endif;                
                ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-32">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Premiumpartner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap">
            <?php
            $partner_query = new WP_Query(array(
                'post_type' => 'partner',
                'posts_per_page' => -1,
                'order' => 'ASC',
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
            
                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 pb-14 w-full md:w-1/2 xl:w-[25%]">';
                    if (!empty($partner_logo) && !empty($partner_url)) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    elseif (!empty($partner_logo) && empty($partner_url)) :
                        echo '<p class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></p>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
            
                    echo '</div>';
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-32">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Ausrüster', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap">
            <?php
            $partner_query = new WP_Query(array(
                'post_type' => 'partner',
                'order' => 'ASC',
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
            
                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 pb-14 w-full md:w-1/2 xl:w-[25%]">';
                    if (!empty($partner_logo) && !empty($partner_url)) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    elseif (!empty($partner_logo) && empty($partner_url)) :
                        echo '<p class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></p>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
            
                    echo '</div>';
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-32">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full whitespace-nowrap"><?php esc_html_e( 'Verbandspartner / Stiftung', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap">
            <?php
            $partner_query = new WP_Query(array(
                'post_type' => 'partner',
                'posts_per_page' => -1,
                'order' => 'ASC',
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
            
                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 pb-14 w-full md:w-1/2 xl:w-[25%]">';
                    if (!empty($partner_logo) && !empty($partner_url)) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    elseif (!empty($partner_logo) && empty($partner_url)) :
                        echo '<p class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></p>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
            
                    echo '</div>';
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-32">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Goldpartner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap">
            <?php
            $partner_query = new WP_Query(array(
                'post_type' => 'partner',
                'posts_per_page' => -1,
                'order' => 'ASC',
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
            
                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 pb-14 w-full md:w-1/2 xl:w-[25%]">';
                    if (!empty($partner_logo) && !empty($partner_url)) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    elseif (!empty($partner_logo) && empty($partner_url)) :
                        echo '<p class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></p>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
            
                    echo '</div>';
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-32">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Silberpartner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap">
            <?php
            $partner_query = new WP_Query(array(
                'post_type' => 'partner',
                'posts_per_page' => -1,
                'order' => 'ASC',
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
            
                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 pb-14 w-full md:w-1/2 xl:w-[25%]">';
                    if (!empty($partner_logo) && !empty($partner_url)) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    elseif (!empty($partner_logo) && empty($partner_url)) :
                        echo '<p class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></p>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
            
                    echo '</div>';
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid mt-16 xl:mt-32 mb-14 xl:mb-48">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Partner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-10 flex flex-col md:flex-row md:flex-wrap">
            <?php
            $partner_query = new WP_Query(array(
                'post_type' => 'partner',
                'posts_per_page' => -1,
                'order' => 'ASC',
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
            
                    echo '<div class="text-center partner-card flex justify-start items-center pr-20 pb-14 w-full md:w-1/2 xl:w-[25%]">';
                    if (!empty($partner_logo) && !empty($partner_url)) :
                        echo '<a href="' . esc_url($partner_url) . '" target="_blank" class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></a>';
                    elseif (!empty($partner_logo) && empty($partner_url)) :
                        echo '<p class="partner-link"><img src="' . esc_url($partner_logo) . '" alt="' . get_the_title() . '" class="partner-logo"></p>';
                    else :
                        echo '<p class="text-center">' . esc_html__('Partner logo or URL not set.', 'stricker') . '</p>';
                    endif;
            
                    echo '</div>';
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-center">' . esc_html__('No partners found.', 'stricker') . '</p>';
            endif;
            ?>
            </div>
        </div>

        <div class="st-container st-container-grid !gap-y-0 mt-16 xl:mt-32 mb-14 xl:mb-48">
            <div class="col-span-1 md:col-span-2 xl:col-span-2">
                <p class="st-subtitle-i text-[#00151F] font-[545] w-full"><?php esc_html_e( 'Gönner', 'stricker' ) ?></p>
                <hr class="w-full border-2 border-blue mt-5 mb-10">
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-5 col-start-1 md:col-start-1 xl:col-start-1">
                <?php
                if( have_rows('patrons_list') ):
                    while( have_rows('patrons_list') ) : the_row(); ?>
                    <a href="<?php echo get_sub_field( 'link' ); ?>" target="_blank" class="block st-body-dates font-[545] text-dark-blue hover:underline mb-3"><?php echo get_sub_field( 'name' ); ?></a>
                <?php
                endwhile;
                endif;
                ?>
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-5 col-start-1 md:col-start-1 xl:col-start-6">
                <?php
                if( have_rows('patrons_list_2') ):
                    while( have_rows('patrons_list_2') ) : the_row(); ?>
                    <a href="<?php echo get_sub_field( 'link' ); ?>" target="_blank" class="block st-body-dates font-[545] text-dark-blue hover:underline mb-3"><?php echo get_sub_field( 'name' ); ?></a>
                <?php
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>