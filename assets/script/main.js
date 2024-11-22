new Swiper('.swiper_big', {
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        prevEl: '.slide_prev',
        nextEl: '.slide_next'
    },

});

new Swiper('.swiper_big_2', {
    speed: 800,
    spaceBetween: 20,
    navigation: {
        prevEl: '.slide_prev_2',
        nextEl: '.slide_next_2'
    },
});

new Swiper('.slider_right_items', {
    speed: 1000,
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

new Swiper('.bam_slider', {
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    nested: true,
});

new Swiper('.second', {
    speed: 1000,
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: 'second.swiper-pagination',
        clickable: true,
    },
});



const bulletImages = [
    './assets/img/main/bam_boat_2.png',
    './assets/img/main/bam_boat_2.png',
    './assets/img/main/bam_boat_2.png',
    './assets/img/main/bam_boat_2.png',
    './assets/img/main/bam_boat_2.png',
];

new Swiper('.card_slider', {
    speed: 1000,
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return `<span class="${className}" style="background-image:url(${bulletImages[index]})"></span>`;
        }
    },
    navigation: {
        prevEl: '.card_prev',
        nextEl: '.card_next'
    },
});

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);

document.addEventListener('DOMContentLoaded', function () {
    const btnSortBy = document.querySelector('.btn_sort_by');
    const sortBlock = document.querySelector('.sort_block');
    const sortOptions = document.querySelectorAll('.sort_block input[type="radio"]');
    const topFiltrSelected = document.querySelector('.top_filtr_selected');
    const arroweMove = document.querySelector('.arrow_top')
    const btnBurger = document.querySelector('.btn_burger')
    const openBurger = document.querySelector('.smal_mav')
    const crosSa = document.querySelector('.burger_line_1')
    const crosSb = document.querySelector('.burger_line_2')
    const bodyStop = document.querySelector('body')

    btnBurger.addEventListener('click', () => {
        openBurger.classList.toggle('open')
        bodyStop.classList.toggle('open')
        crosSa.classList.toggle('open')
        crosSb.classList.toggle('open')
    })



    btnSortBy.addEventListener('click', function (event) {
        event.preventDefault();
        sortBlock.classList.toggle('hidden');
        arroweMove.classList.toggle('open');
    });


    sortOptions.forEach(option => {
        option.addEventListener('change', function () {
            topFiltrSelected.textContent = this.value;
            sortBlock.classList.add('hidden');
            arroweMove.classList.remove('open');
        });
    });


    document.addEventListener('click', function (event) {
        if (!btnSortBy.contains(event.target) && !sortBlock.contains(event.target)) {
            sortBlock.classList.add('hidden');
            arroweMove.classList.remove('open');
        }
    });

    const labels = document.querySelectorAll('.sort_block label');
    labels.forEach(label => {
        label.addEventListener('click', function () {
            const input = this.querySelector('input');
            input.checked = true;
            input.dispatchEvent(new Event('change'));
        });
    });

});

$(document).ready(function() {
    $('#openPopup').on('click', function() {
        $('#popupOverlay').css('display', 'block').animate({opacity: 1}, 300);
        $('body').css('overflow', 'hidden'); 
    });

    $('#closePopup').on('click', function() {
        $('#popupOverlay').animate({opacity: 0}, 300, function() {
            $(this).css('display', 'none');
            $('body').css('overflow', ''); 
        });
    });

    $(document).on('click', function(event) {
        if ($(event.target).is('#popupOverlay')) {
            $('#popupOverlay').animate({opacity: 0}, 300, function() {
                $(this).css('display', 'none');
                $('body').css('overflow', 'visible'); 
            });
        }
    });
});

$(document).ready(function() {
    $('.openSignPop').on('click', function(event) {
        event.preventDefault();
        $('#popupSignOverlay').css('display', 'block').animate({opacity: 1}, 300);
        $('body').css('overflow', 'hidden'); 
    });

    $('#closeSignPopup').on('click', function() {
        $('#popupSignOverlay').animate({opacity: 0}, 300, function() {
            $(this).css('display', 'none');
            $('body').css('overflow', ''); 
        });
    });

    $(document).on('click', function(event) {
        if ($(event.target).is('#popupSignOverlay')) {
            $('#popupSignOverlay').animate({opacity: 0}, 300, function() {
                $(this).css('display', 'none');
                $('body').css('overflow', 'visible'); 
            });
        }
    });
});

