<section class="section-partners bg-dark-blue -mt-[1px]">
	<div class="st-grid">
        <?php
        $news_args   = array(
            'post_type'   => 'news',
            'order'       => 'DESC',
            'orderby'     => 'date',
            'post_status' => 'publish',
            'posts_per_page' => 9,
            'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1 
        );
        $newse_query = new WP_Query( $news_args );
        if ( $newse_query->have_posts() ) : ?>
            <div class="st-container st-container-grid">
                <?php
                while ( $newse_query->have_posts() ) :
                    $newse_query->the_post();
                    get_template_part( 'template-parts/components/card-news' );
                endwhile;
                ?>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2 justify-end flex">
            
            <?php
            // Pagination
            if ($newse_query->max_num_pages > 1) {
                echo '<div class="pagination flex min-w-[375px]">';
            
                $current_page = max(1, get_query_var('paged'));
                $total_pages = $newse_query->max_num_pages;
            
                if ($current_page > 1) {
                    echo '<a href="' . get_previous_posts_page_link() . '" class="pagination-arrow prev-arrow flipped mr-7"></a>';
                } elseif ($current_page == 1) {
                    echo '<span class="w-[145px] mr-7"></span>';
                }
            
                echo '<div class="numeric-pagination">' . $current_page . ' / ' . $total_pages . '</div>';

                if ($current_page < $total_pages) {
                    echo '<a href="' . get_next_posts_page_link() . '" class="pagination-arrow next-arrow ml-7"></a>';
                }
                
                echo '</div>';
            }
            ?>
            </div>
            <?php 
        wp_reset_postdata();
        endif;
        ?>
    </div>
</section>