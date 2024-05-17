<section class="section-partners bg-light-blue -mt-[1px]">
	<div class="st-grid">
        <div class="st-container grid grid-cols-2 md:grid-cols-8 xl:grid-cols-9">
            <?php
            if( have_rows('team_members') ):
            while( have_rows('team_members') ) : the_row();
                get_template_part( 'template-parts/components/card-team' );
            endwhile;
            endif; ?>
        </div>
    </div>
</section>