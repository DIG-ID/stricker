import imagesLoaded from 'imagesloaded';
import isotope from 'isotope-layout';


// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if ( $(".page-template-page-media")[0] ) {
			// init Isotope
			const photoGrid = new isotope( '.photo-grid', {
				// options
				itemSelector: '.element-item',
				//percentPosition: true,
				layoutMode: 'fitRows'
			});

			/*const videoGrid = new isotope( '.video-grid', {
				// options
				itemSelector: '.element-item',
				//percentPosition: true,
				layoutMode: 'fitRows'
			});*/

			imagesLoaded(photoGrid.element).on('progress', function() {
				photoGrid.layout();
			});
	
			var photoFilters = {};

			// flatten object by concatting values
			function concatValues( obj ) {
				var value = '';
				for ( var prop in obj ) {
					value += obj[ prop ];
				}
				return value;
			}

			// bind filter on select change
			$('.filters-select--photo').on( 'change', function() {
				var $select = $(this);
				var filterGroup = $select.attr('data-filter-group');
				var filterValue = $select.val(); // Get selected value
			
				// Update filters object
				photoFilters[filterGroup] = filterValue;
			
				// Generate concatenated filter value
				var filterCombined = concatValues(photoFilters);
				photoGrid.arrange({filter: filterCombined});
			});

			// Event listener for reset button
			$('.reset-filters--photo').on('click', function() {
				// Clear the filters object
				photoFilters = {};

				// Generate empty filter value (show all items)
				var filterValue = '';

				// Apply filter to Isotope to show all items
				photoGrid.arrange({filter: filterValue});

				// Reset all select elements to their default state (e.g., "All")
				$('.filters-select--photo').each(function() {
					var $select = $(this);
					$select.val('*'); // Set default value ("All")
				});
			});

			// Event listener for Isotope arrangeComplete event
			photoGrid.on('arrangeComplete', function(event) {
				// Get filtered items
				var filteredItems = grid.filteredItems;

				// Fade in or out the no-items message based on filtered items
				if (filteredItems.length === 0) {
						$('#no-items-message').stop().fadeIn(); // Fade in if no items
				} else {
						$('#no-items-message').stop().fadeOut(); // Fade out if items present
				}
			});

			// init Isotope for videos

			/*
			imagesLoaded(videoGrid.element).on('progress', function() {
				videoGrid.layout();
			});
	
			var videoFilters = {};

			// flatten object by concatting values
			function videoConcatValues( obj ) {
				var value = '';
				for ( var prop in obj ) {
					value += obj[ prop ];
				}
				return value;
			}

			// bind filter on select change
			$('.filters-select--video').on( 'change', function() {
				var $select = $(this);
				var filterGroup = $select.attr('data-filter-group');
				var filterValue = $select.val(); // Get selected value
			
				// Update filters object
				videoFilters[filterGroup] = filterValue;
			
				// Generate concatenated filter value
				var filterCombined = videoConcatValues(videoFilters);
				videoGrid.arrange({filter: filterCombined});
			});

			// Event listener for reset button
			$('.reset-filters--video').on('click', function() {
				// Clear the filters object
				videoFilters = {};

				// Generate empty filter value (show all items)
				var filterValue = '';

				// Apply filter to Isotope to show all items
				videoGrid.arrange({filter: filterValue});

				// Reset all select elements to their default state (e.g., "All")
				$('.filters-select--video').each(function() {
					var $select = $(this);
					$select.val('*'); // Set default value ("All")
				});
			});

			// Event listener for Isotope arrangeComplete event
			videoGrid.on('arrangeComplete', function(event) {
				// Get filtered items
				var filteredItems = grid.filteredItems;

				// Fade in or out the no-items message based on filtered items
				if (filteredItems.length === 0) {
						$('#no-items-message').stop().fadeIn(); // Fade in if no items
				} else {
						$('#no-items-message').stop().fadeOut(); // Fade out if items present
				}
			});
			*/

		}


	}, false);
});