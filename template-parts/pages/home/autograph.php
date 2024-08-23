<section class="section-autograph bg-dark-blue pt-0 pb-24 md:pb-20 md:py-32 xl:py-56 -my-1">
    <div class="st-grid relative">
        <div class="container__autograph col-span-2 md:col-span-6 xl:col-span-8 col-start-1 md:col-start-1 xl:col-start-3 flex justify-center">
            <a href="#" data-fancybox data-src="#autograph-dialog-content">
                <div class="circle-mask w-[560px] h-[370px] md:h-[560px] overflow-hidden relative" style="border-radius: 50%;">
                    <?php 
                    $image = get_field( 'tour_autograph_image' );
                    if ( $image ) :
                    ?>
                        <div class="w-[360px] h-[360px] md:w-[600px] md:h-[600px] xl:w-[770px] xl:h-[770px] bg-cover bg-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded" style="background-image: url('<?php echo esc_url(wp_get_attachment_image_url( $image, 'full' )); ?>'); border-radius: 50%;"></div>
                    <?php endif; ?>
                    <div class="w-full text-center absolute bottom-[12%] z-20">
                        <button class="btn btn--autograph"></button>
                    </div>
                </div>
            </a>
            <div class="st-title-big st-title-big--autograph st-text-outline-big text-transparent w-full text-center absolute -rotate-[10.033deg] bottom-1/3">
                <span style="user-select:none;"><?php esc_html_e( 'Autogrammkarte', 'stricker' ) ?></span>
            </div>
            
        </div>
        
    </div>
    <div class="st-grid">
        <div class="col-span-2 md:col-span-8 xl:col-span-12 flex flex-col items-center md:mt-12">
            <p class="st-subtitle-big text-light-blue uppercase"><?php esc_html_e( 'Erhalte deine', 'stricker' ) ?></p>
            <p class="st-title text-blue"><?php esc_html_e( 'Autogrammkarte', 'stricker' ) ?></p>
        </div>
    </div>
</section>

<div id="autograph-dialog-content" style="display:none;" class="w-full max-w-lg bg-page-bg-light">
    <?php
    $current_lang = apply_filters( 'wpml_current_language', NULL );
    if ( 'en' === $current_lang ) :
        ?>
        <div class="flex flex-col items-center justify-center text-center">
            <h2 class="st-title text-blue !text-4xl mb-6">Autograph card</h2>
 
            <p class="st-body mb-6">For a signed autograph card from Dominic, please send a sufficiently pre-stamped C5 envelope to the following address:</p>
            <p class="st-body text-blue">Fanpost Dominic Stricker <br>
            Stockhornweg 11 <br>
            3506 Grosshöchstetten <br>
            Schweiz</p>


        </div>
        <?php
    elseif ( 'de' === $current_lang ) :
        ?>
        <div class="flex flex-col items-center justify-center text-center">
            <h2 class="st-title text-blue !text-4xl mb-6">Autogrammkarte</h2>
            <p class="st-body mb-6">Für eine signierte Autogrammkarte von Dominic, bitte einen ausreichend vorfrankierten C5 Umschlag an folgende Adresse senden:</p>
            <p class="st-body text-blue">Fanpost Dominic Stricker <br>
            Stockhornweg 11 <br>
            3506 Grosshöchstetten <br>
            Schweiz</p>
        </div>
        <?php
    endif;
    ?>
</div>