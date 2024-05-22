import Swiper from 'swiper/bundle';
import { gsap } from "gsap";
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		var partnerSwiper = new Swiper('.swiper-partner', {
			breakpoints: {
				576: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				992: {
					slidesPerView: 4,
					spaceBetween: 30,
				},
				1200: {
					slidesPerView: 6,
					spaceBetween: 30,
				},
			},
			spaceBetween: 30,
			loop: true,
			speed: 6000,
			slidesPerView: 'auto',
			autoplay: {
				delay: 1,
				disableOnInteraction: false,
			},
		});		

	}, false);
});