<?php
get_header();
do_action( 'before_main_content' );
?>
<section class="page-header page-header__contact bg-dark-blue text-white pt-40 md:pt-60 xl:pt-[275px] pb-11 md:pb-20 xl:pb-40">
	<div class="st-grid !px-0">
		<div class="st-container st-container-grid">
			<div class="col-span-2 md:col-span-4 xl:col-span-10">
                <p id="breadcrumbs"><span><span><a href="https://dominicstricker.yournewwebsite.ch/en/"><?php echo esc_html_e( '404 Fehler', 'stricker' ) ?></a></span></span></p>
				<h1 class="st-title text-blue mb-4"><?php echo esc_html_e( 'SEITE NICHT GEFUNDEN', 'stricker' ) ?></h1>
                
			</div>
		</div>
	</div>
</section>


<section class="page-404 bg-dark-blue pb-10 md:pb-36 xl:pb-48">
	<div class="st-grid !px-0">
		<div class="st-container st-container-grid">
			<div class="col-span-6 md:col-span-6 xl:col-span-12">
                <h2 class="inline-block pr-9 font-transducerCondensed font-[545] tracking-wide xl:tracking-normal text-white text-base md:text-[32px] leading-[19px] md:leading-[39px] italic relative mb-6 md:mb-11 xl:mb-20"><?php echo esc_html_e( 'Sie scheinen das Spielfeld verlassen zu haben. Verwenden Sie die Schaltfläche unten, um zur Startseite zurückzukehren.', 'stricker' ) ?></h2>
                
			</div>
            <div class="col-span-6 md:col-span-6 xl:col-span-12">
                <a class="btn-arrow-caps !normal-case text-blue" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html_e( 'zur Startseite', 'stricker' ) ?></a>
            </div>
		</div>
	</div>
</section>
<?php
do_action( 'after_main_content' );
get_footer();