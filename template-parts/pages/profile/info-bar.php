<section class="section-info-bar bg-blue">
    <div class="block xl:flex justify-evenly py-8 px-[10%] xl:px-0">
            <div class="info mb-4 md:mb-0">
                <p class="font-transducer text-[10px] md:text-[14px] leading-none md:leading-[29px] font-[500] text-dark-blue tracking-[0.28px] uppercase"><?php esc_html_e( 'Grösse', 'stricker' ); ?></p>
                <p class="font-transducerCondensed text-[22px] md:text-[45px] leading-normal uppercase font-normal text-light-blue"><?php the_field( 'info_bar_height' ); ?></p>
            </div>
            <div class="info mb-4 md:mb-0">
                <p class="font-transducer text-[10px] md:text-[14px] leading-none md:leading-[29px] font-[500] text-dark-blue tracking-[0.28px] uppercase"><?php esc_html_e( 'Spielart', 'stricker' ); ?></p>
                <p class="font-transducerCondensed text-[22px] md:text-[45px] leading-normal uppercase font-normal text-light-blue"><?php the_field( 'info_bar_hand' ); ?></p>
            </div>
            <div class="info mb-4 md:mb-0">
                <p class="font-transducer text-[10px] md:text-[14px] leading-none md:leading-[29px] font-[500] text-dark-blue tracking-[0.28px] uppercase"><?php esc_html_e( 'Coach', 'stricker' ); ?></p>
                <p class="font-transducerCondensed text-[22px] md:text-[45px] leading-normal uppercase font-normal text-light-blue"><?php the_field( 'info_bar_coach' ); ?></p>
            </div>
            <div class="info mb-4 md:mb-0">
                <p class="font-transducer text-[10px] md:text-[14px] leading-none md:leading-[29px] font-[500] text-dark-blue tracking-[0.28px] uppercase"><?php esc_html_e( 'Bevorzugter Belag', 'stricker' ); ?></p>
                <p class="font-transducerCondensed text-[22px] md:text-[45px] leading-normal uppercase font-normal text-light-blue"><?php the_field( 'info_bar_surface' ); ?></p>
            </div>
    </div>
</section>