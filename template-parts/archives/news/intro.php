<section class="section-intro bg-dark-blue pt-80 pb-20 xl:pt-[275px] xl:pb-48">
	<div class="st-grid">
        <div class="st-container st-container-grid">
            <div class="col-span-2 md:col-span-4 xl:col-span-2">
                <p class="st-title text-blue"><?php echo get_field( 'news_title', 'option' );  ?></p>
            </div>
            <div class="col-span-2 md:col-span-4 xl:col-span-3 hidden xl:block">
                <p class="st-body-dates text-light-blue"><?php echo get_field( 'news_intro', 'option' );  ?></p>
            </div>
        </div>
    </div>
</section>