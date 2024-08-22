import { Fancybox } from "@fancyapps/ui";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if ( $(".page-template-page-media")[0] ) {
			Fancybox.bind('[data-fancybox="gallery"]', {
				//
			}); 
		}

		if ( $(".page-template-page-home")[0] ) {
			Fancybox.bind('[data-fancybox]', {
				//
			}); 
		}


	}, false);
});