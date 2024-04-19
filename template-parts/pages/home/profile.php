<section class="section-hero relative pt-28">
    <div class="absolute inset-0 overflow-hidden -mt-[2px]">
        <div class="absolute inset-0 bg-dark-blue" style="clip-path: polygon(0 0, 100% 0, 100% 300px, 0 500px);"></div>
    </div>
	<div class="st-grid grid-rows-2 grid-flow-col relative z-10">
        <div class="col-span-1 md:col-span-3 xl:col-span-4 xl:col-start-1">
        <?php 
            $image = get_field( 'profile_profile_pic' );
            if ( $image ) :
                echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) );
            endif;
        ?>
        </div>
        <div class="col-span-1 md:col-span-3 xl:col-span-4 xl:col-start-2 xl:col-end-5 relative">
            <div class="absolute w-[650px]">
                <p class="st-title text-blue xl:pt-56 xl:pb-12"><?php esc_html_e( 'Tennis ist meine', 'stricker' ); ?><br><?php esc_html_e( ' Leidenschaft.', 'stricker' ); ?></p>
                <p class="st-subtitle-i font-[545] text-dark-blue"><?php esc_html_e( 'Im Juniorentennis konnte ich bereits unvergessliche Momente erleben. Jetzt geht es darum, besser zu werden und den nächsten Schritt zu packen. ', 'stricker' ); ?><br><?php esc_html_e( 'Das geht nur zusammen. Deshalb schon jetzt: Danke für Deine Unterstützung!', 'stricker' ); ?></p>
            </div>
            
        </div>
        <div class="col-span-1 md:col-span-3 xl:col-span-12 xl:col-start-5 xl:col-end-13 xl:grid xl:grid-cols-8 gap-6 xl:gap-8 row-span-2 pt-9">
            <div class="xl:w-80 flex">
                <div class="st-title-big !not-italic text-blue w-[190px]"><span class="inline-block w-full border-r-2 border-light-blue pb-7 leading-[130px]">95</span></div>
                <div class="st-subtitle-bi-caps text-light-blue w-[130px] flex justify-end pt-2">Singles<br>Ranking</div>
            </div>
            <div class="xl:w-[260px] xl:col-start-5 flex">
                <div class="st-title !not-italic text-blue w-[140px]"><span class="inline-block w-full border-r-2 border-light-blue pb-7 leading-[60px]">250</span></div>
                <div class="st-subtitle-bi-caps text-light-blue w-[120px] flex justify-end pt-1">Doubles<br>Ranking</div>
            </div>
            <div class="col-span-1 md:col-span-3 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-3 xl:pt-40 xl:grid xl:grid-cols-6 gap-x-6 xl:gap-x-8">
                <div class="border-t-2 border-blue xl:col-span-2 pt-5 flex text-dark-blue">
                    <div class="w-1/2">
                        <span class="st-subtitle-caps !leading-6">Dominic</span><br>
                        <span class="st-subtitle-b-caps !leading-6">Stricker</span>
                    </div>
                    <div class="w-1/2">
                        <span class="st-subtitle-caps !leading-6">Geboren:</span><br>
                        <span class="st-subtitle-b-caps !leading-6">2002</span>
                    </div>
                </div>
                
                <div class="border-t-2 border-blue xl:col-span-2 pt-5 flex items-start text-dark-blue">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/swiss-flag.svg" title="Flag" alt="flag" class="w-[77px]">
                    <div class="pl-5">
                        <span class="st-subtitle-caps !leading-6">Herkunftsort,</span><br>
                        <span class="st-subtitle-b-caps !leading-6">Schweiz</span>
                    </div>
                </div>
                <div class="xl:col-span-6">
                <?php 
                    $image = get_field( 'profile_player_pic' );
                    if ( $image ) :
                        echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) );
                    endif;
                ?>
                </div>
            
            </div>
        </div>
        
    </div>
</section>