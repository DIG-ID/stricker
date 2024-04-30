import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from '@studio-freight/lenis';

//Lenis configuration
export const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1,
  smooth: true,
  //easing: easeOutExpo(),
});

/*lenis.on('scroll', (e) => {
  console.log(e)
});*/

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf);

gsap.registerPlugin(ScrollTrigger);

//GSAP ScrollTrigger integration
lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
});

gsap.ticker.lagSmoothing(0);

$(function() {

  /*****************************************
   *                                       *
   *               Home Page               *
   *                                       *
   ****************************************/
  if ( $(".page-template-page-home")[0] ) {
    
    const items = document.querySelectorAll(".number-anim");
    const sectionProfile = document.querySelector("#section-profile");

    // Callback function to animate the numbers when section-profile enters the viewport
    function animateNumbers(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          gsap.from(items, {
            textContent: 0,
            duration: 2,
            ease: "power1.in",
            snap: { textContent: 1 },
            stagger: {
              each: 1.0,
              
            }
          });
          observer.unobserve(sectionProfile); // Stop observing once animation is triggered
        }
      });
    }

    // Intersection Observer setup
    const observer = new IntersectionObserver(animateNumbers, { threshold: 0 });

    // Observe the section-profile element
    observer.observe(sectionProfile);


  };

});