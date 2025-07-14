<section class="page-contact-support bg-dark-blue">
	<div class="st-grid !px-0">
		<div class="st-container st-container-grid grid grid-cols-2 md:grid-cols-6 xl:grid-cols-12">
			<div class="col-start-1 col-span-2 md:col-start-1 md:col-span-6 xl:col-start-1 xl:col-span-12 pb-[30px]">
                <h2 class="flex items-center gap-x-6 font-transducerCondensed font-[545] tracking-wide xl:tracking-normal text-white text-base md:text-[32px] leading-[39px] italic md:mb-2 xl:mb-3">
                    <?php the_field( 'support_over_title' ); ?>
                </h2>
                <?php if ( ICL_LANGUAGE_CODE === 'en' ) : ?>
                    <hr class="w-[110px] md:w-[210px] xl:w-[200px] h-[2px] bg-gradient-to-r from-[#14A5BB] to-[#14A5BB] rounded-full border-none" />
                <?php elseif ( ICL_LANGUAGE_CODE === 'de' ) : ?>
                    <hr class="w-[123px] md:w-[245px] xl:w-[223px] h-[2px] bg-gradient-to-r from-[#14A5BB] to-[#14A5BB] rounded-full border-none" />
                <?php endif; ?>
			</div>       
                <?php 
                    $image = get_field('support_picture');
                    if ($image) :
                        $image_url = esc_url(wp_get_attachment_image_url($image, 'full'));
                ?>
                    <div class="col-span-1 md:col-span-2 xl:col-span-3 order-1 xl:order-none">
                        <div class="w-[152px] h-[228px] md:w-[232px] md:h-[348px] xl:w-[453px] xl:h-[679px] bg-cover bg-center"
                            style="background-image: url('<?php echo $image_url; ?>');">
                        </div>
                    </div>
                    <?php endif; ?>
                <div class="col-start-1 col-span-2 md:col-start-1 md:col-span-4 xl:col-start-7 xl:col-span-3 order-2 xl:order-none">
                    <p class="font-transducer font-normal text-[10px] md:text-[17px] text-white leading-[18px] md:leading-[29px] tracking-[0.2px] md:tracking-[0.34px] pb-[30px] md:pb-[50px] xl:pb-[75px] w-[300px] md:w-[450px]">
                        <?php the_field( 'support_text' ); ?>
                    </p>
                    <?php 
                        $file = get_field('support_download_button');
                        if ($file):
                            $url = $file['url'];
                            $title = $file['title']
                        ?>
                            <a href="<?php echo esc_url($url); ?>" class="btn-download text-[#14A5BB] pb-2">
                                <?php echo esc_html($title); ?>
                            </a>
				    <?php endif; ?>
                    <p class="font-transducer font-normal text-[10px] md:text-[17px] text-white leading-[18px] md:leading-[29px] tracking-[0.2px] md:tracking-[0.34px]">
                        <?php the_field( 'support_download_text' ); ?>
                    </p>
            </div>
		</div>
	</div>
</sectionx>