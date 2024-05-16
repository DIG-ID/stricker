<div class="post-news pt-28 xl:pt-48 pb-16 md:pb-32 xl:pb-60 overflow-hidden">
	<div class="st-grid">
        <div class="st-container st-container-grid">
            <div class="col-span-2 md:col-span-6 xl:col-span-7 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-7">
                <div class="col-span-2 md:col-span-6 xl:col-span-7 mb-7 xl:mb-0">
                    <?php if (has_post_thumbnail()) : 
                        $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'featured-image-overview');
                    ?>
                    <div class="featured-image">
                        <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="size-featured-image-overview" />
                    </div>
                    <?php else : ?>
                    <div class="featured-image">
                        <img src="https://placehold.co/1105x605">
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-span-2 md:col-span-6 xl:col-span-7 mb-7 xl:mb-0">
                    <?php $formatted_date = get_the_date('d/m/y');
                        echo '<p class="st-body-dates text-blue my-4">' . $formatted_date . '</p>';
                    ?>
                    <div class="st-subtitle-bi text-dark-blue my-5"><?php the_title(); ?></div>
                </div>
                <div class="col-span-2 md:col-span-6 xl:col-span-7 mb-7 xl:mb-0">
                    <div class="st-body-dates text-dark-blue mb-20"><?php the_content(); ?></div>
                </div>
            </div>
            <div class="col-span-1 md:col-span-6 xl:col-span-3 grid grid-cols-2 md:grid-cols-6 xl:grid-cols-3">

            </div>
        </div>
	</div>
	<div class="st-grid">
        <div class="st-container st-container-grid">
            <div class="col-span-2 md:col-span-6 xl:col-span-7">
                <a href="<?php echo get_post_type_archive_link( 'news' ); ?>" class="st-body-dates uppercase text-blue mt-12"><?php esc_html_e('Zurück zu den Nachrichten', 'stricker'); ?></a>
            </div>
        </div>
	</div>
</div>