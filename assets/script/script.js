const btnBurger = document.querySelector('.btn_burger')
const openBurger = document.querySelector('.smal_mav')
const bodyStop = document.querySelector('body')
const crosSa = document.querySelector('.burger_line_1')
const crosSb = document.querySelector('.burger_line_2')

btnBurger.addEventListener('click', () => {
    openBurger.classList.toggle('open')
    bodyStop.classList.toggle('open')
    crosSa.classList.toggle('open')
    crosSb.classList.toggle('open')
})


function preventDefault(e) {
    e.preventDefault();
  }
  
  
  function disableScroll() {
    window.addEventListener('scroll', preventDefault, { passive: false });
    window.addEventListener('wheel', preventDefault, { passive: false });
    window.addEventListener('touchmove', preventDefault, { passive: false });
  }
  

  function enableScroll() {
    window.removeEventListener('scroll', preventDefault);
    window.removeEventListener('wheel', preventDefault);
    window.removeEventListener('touchmove', preventDefault);
  }



document.addEventListener('DOMContentLoaded', function () {


    new Swiper('.swiper_big', {
        speed: 800,
        slidesPerView: 1,
        /* autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        }, */
        spaceBetween: '20px',
        navigation: {
            prevEl: '.slide_prev',
            nextEl: '.slide_next'
        },

    });

    new Swiper('.swiper_big_2', {
        speed: 800,
        slidesPerView: 1,
        /* autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        }, */
        spaceBetween: '20px',
        navigation: {
            prevEl: '.slide_prev_2',
            nextEl: '.slide_next_2'
        },


    });

    new Swiper('.slider_right_items', {
        speed: 1000,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        /* autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        }, */

    });

    new Swiper('.bam_slider', {
        speed: 800,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        /* autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        }, */
        nested: true,
    });

    new Swiper('.second', {
        speed: 1000,
        slidesPerView: 1,
        pagination: {
            el: 'second.swiper-pagination',
            clickable: true,
        },
        /* autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        }, */

    });

    document.getElementById('fileInput').addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.querySelector('.speach_order').value = e.target.result;
            };
            reader.readAsText(file);
        }
    });

    gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);



    ScrollSmoother.create({
        wrapper: '.wrapper',
        content: '.content',
        smooth: 1.0,
        effects: true,
    });

    let mm = gsap.matchMedia();
    const timeline = gsap.timeline();
    gsap.set('.logo_img_2', { x: 120, opacity: 0 })
    gsap.set('.logo_img_1', { opacity: 0 })
    gsap.set('.back_logo_js', { opacity: 0 })
    

    

    
        
    mm.add('(min-width: 1290px)', () => {

        disableScroll();

        timeline.to('.back_logo_js', {opacity:1})
            .fromTo('.logo_img_1', { opacity: 0, scale: 1.5, }, { opacity: 1, scale: 1.5, delay: 1, duration: 1 })
            .fromTo('.logo_img_1', { scale: 1.5, x: 0, }, { scale: 1, delay: 1 });

        timeline.fromTo('.logo_img_1', { x: 0 }, { x: -200, duration: 1.5 })
            .to('.logo_img_2', { opacity: 1, duration: 2, delay: 4 }, 0)
            .to('.logo_img_1', { opacity: 0, dealy: 6 })
            .to('.logo_img_2', { opacity: 0, delay: 6 }, 0)
            .to('.back_logo_js', { opacity: 0, y: -500, delay: 6.8 }, 0)
            .fromTo('.main_hero', { y: 900 }, { y: 0, duration: 1.5, delay: 7 }, 0)
            .fromTo('.slider_right', { y: 500, opacity: 0 }, { y: 0, opacity: 1, delay: 7, duration: 1.7 }, 0)
            timeline.fromTo('.boats_main', {opacity: 0}, {opacity: 1, delay:8 }, 0)
            .eventCallback('onComplete', enableScroll);

            

            timeline.fromTo('.about_us_list', {y:350}, { y:0, 
                scrollTrigger: {
                    trigger: '.about_us',
                    start: '50% center',
                    pin: true,
                    scrub: 2,
                }}
            )
            let itemsAdv = document.querySelectorAll('.adv');
            itemsAdv.forEach(item => {
                timeline.fromTo(item, { opacity: 0, x: '100%' }, { opacity: 1, x: 0, duration: 1.5, scrollTrigger: { trigger: item, start: 'top bottom', end: 'top center', scrub: true } })
            });   
            

    })

   











});


