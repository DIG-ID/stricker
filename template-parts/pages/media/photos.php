<section class="section-photos bg-light-blue">
	<div class="st-container-notfluid">
		<div class="st-grid">
			<div class="col-span-2 md:col-span-6 xl:col-span-6 md:col-start-2 xl:col-start-2">
				<h2><?php esc_html_e( 'photos', 'stricker' ); ?></h2>
			</div>
		</div>
		<div class="st-grid">
			<div class="col-span-10 col-start-2">
				<?php
				$media_taxonomies = array( 'media-year', 'tournament', 'surface', 'type-of-shot' );

				foreach ( $media_taxonomies as $media_tax ) :
					$media_tax = get_taxonomy( $media_tax );
					if ( ! empty( $media_tax ) ) :
						$media_tax_name = $media_tax->labels->name;
						$media_tax_slug = $media_tax->rewrite['slug'];
						$media_terms = get_terms(
							array(
								'taxonomy'   => $media_tax_slug,
								'hide_empty' => false,
							)
						);
						?>
						<select name="<?php echo esc_attr( $media_tax_slug ); ?>" id="<?php echo esc_attr( $media_tax_slug ); ?>" class="filters-select" data-filter-group="<?php echo esc_attr( $media_tax_slug ); ?>">
							<option value="*"><?php echo esc_html( $media_tax_name ); ?></option>
							<?php
							foreach ( $media_terms as $media_term ) :
								echo '<option value=".'. esc_attr( $media_term->slug ) .'">' . esc_html( $media_term->name ) . '</option>';
							endforeach;
							?>
						</select>
						<?php
					endif;
				endforeach;
				?><button id="reset-filters">Reset Filters</button>
			</div>
		</div>
		<div class="st-grid">
			<div class="col-span-10 col-start-2">
				<?php
				$gallery = get_field( 'photos_gallery' );
				if ( $gallery ) :
					echo '<div class="photo-grid">';
					foreach ( $gallery as $g_image ) :
						$image_id           = $g_image['ID'];
						$image_taxonomies   = array( 'media-year', 'tournament', 'surface', 'type-of-shot' );
						$image_term_classes = array();
						// Loop through each custom taxonomy.
						foreach ( $image_taxonomies as $image_tax ) :
							// Retrieve terms for the current taxonomy and attachment ID.
							$image_terms = get_the_terms( $image_id, $image_tax );
							// Check if terms are retrieved successfully.
							if ( $image_terms && ! is_wp_error( $image_terms ) ) :
								// Extract term slugs to use as class names.
								$term_slugs           = wp_list_pluck( $image_terms, 'slug' );
								$image_term_classes[] = implode( ' ', $term_slugs );
							endif;
						endforeach;
						// Check if image has any associated terms.
						if ( ! empty( $image_term_classes ) ) :
							// Generate class attribute string for the image container.
							$image_class_string = implode( ' ', $image_term_classes );
							// Output the image HTML.
							?>
							<div class="w-1/5 element-item <?php echo esc_attr( $image_class_string ); ?>" data-category="<?php echo esc_attr( $image_class_string ); ?>">
								<a href="<?php echo esc_url( $g_image['url'] ); ?>" data-fancybox="gallery" data-src="<?php echo esc_url( $g_image['sizes']['thumbnail'] ); ?>">
									<img src="<?php echo esc_url( $g_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $g_image['alt'] ); ?>" />
								</a>
							</div>
							<?php
						endif;
					endforeach;
					echo '</div>';
				endif;
				?>

			</div>
		</div>
	</div>
</section>
