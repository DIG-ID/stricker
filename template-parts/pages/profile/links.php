<section class="section-links bg-blue">
    <div class="flex py-[60px] xl:justify-end">
        <div class="st-grid">
            <div class="col-span-2 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-2 xl:col-start-10">
                <?php 
                $atp    = get_field( 'links_atp' );
                if ( $atp ) :
                    $link_url    = $atp['url'];
                    $link_title  = $atp['title'];
                    $link_target = $atp['target'] ? $atp['target'] : '_self';
                    ?>
                    <div class="col-span-2 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-2 xl:col-start-2">
                        <a class="btn-arrow text-dark-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                <?php
				endif; ?>
            
            
                <?php 
                $itf    = get_field( 'links_itf' );
                if ( $itf ) :
                    $link_url    = $itf['url'];
                    $link_title  = $itf['title'];
                    $link_target = $itf['target'] ? $itf['target'] : '_self';
                    ?>
                    <div class="col-span-2 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-2 xl:col-start-4">
                        <a class="btn-arrow text-dark-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                <?php
				endif; ?>
           
            
                <?php 
                $swisstennis    = get_field( 'links_swisstennis' );
                if ( $swisstennis ) :
                    $link_url    = $swisstennis['url'];
                    $link_title  = $swisstennis['title'];
                    $link_target = $swisstennis['target'] ? $swisstennis['target'] : '_self';
                    ?>
                    <div class="col-span-2 md:col-span-3 xl:col-span-2 col-start-1 md:col-start-2 xl:col-start-6">
                        <a class="btn-arrow text-dark-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                <?php
				endif; ?>
            
        </div>
    </div>
</section>