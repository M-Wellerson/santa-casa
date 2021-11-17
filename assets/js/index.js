M.AutoInit();

function toggle_active(el) {
    el.classList.toggle('active')
    document.querySelector('.js-menu').classList.toggle('active')
}

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {});
});

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.carrousel-institution');
    let options = {
        numVisible: -2,
        fullWidth: true,
        indicators: false,
    }
    var instances = M.Carousel.init(elems, options);
});

const banner = new Swiper('.js-banner', {
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        slideChangeTransitionStart: function (e) {
            clearTimeout(globalThis.animate_banner)
            document.querySelectorAll('.banner-box-transition').forEach(el => {
                el.classList.add('banner-box-active')
            })
            document.querySelectorAll('.box-seguro').forEach(el => {
                el.classList.add('box-seguro-active')
            })
            document.querySelectorAll('.banner-link').forEach(el => {
                el.classList.add('banner-link-active')
            })
            document.querySelectorAll('.swiper-button-next, .swiper-button-prev').forEach(el => {
                el.classList.add('event-none')
            })
        },
        slideChangeTransitionEnd: function () {
            globalThis.animate_banner = setTimeout(() => {
                document.querySelectorAll('.banner-box-transition').forEach(el => {
                    el.classList.remove('banner-box-active')
                })
                document.querySelectorAll('.box-seguro').forEach(el => {
                    el.classList.remove('box-seguro-active')
                })
                document.querySelectorAll('.banner-link').forEach(el => {
                    el.classList.remove('banner-link-active')
                })
                document.querySelectorAll('.swiper-button-next, .swiper-button-prev').forEach(el => {
                    el.classList.remove('event-none')
                })
            }, 1600)
        }
    }
});

var planos_slider = new Swiper(".js-planos", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    centeredSlides: true,
    // cssMode: true,
    effect: "slide",
    speed: 1000,
    navigation: {
        nextEl: '.cards-next',
        prevEl: '.cards-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 4,
        },
    },

});

function sac_open(element) {
    if (!element.classList.contains('sac_active')) {
        if (document.querySelector('.sac_active')) {
            document.querySelector('.sac_active').classList.remove('sac_active')
        }
        element.classList.toggle('sac_active')
    } else {
        element.classList.remove('sac_active')
    }
}

function click_video(e) {
    let video = document.querySelector('#video_popup')
    let id_video = e.getAttribute('data-video')
    if (video) {
        video.src = `https://www.youtube.com/embed/${id_video}?autoplay=1&mute=1`
    }
}

function open_seguros(e) {

    if (!e.classList.contains('active_seguros')) {
        if (document.querySelector('.active_seguros')) {
            document.querySelector('.active_seguros').classList.remove('active_seguros')
        }
        e.classList.toggle('active_seguros')
    } else {
        e.classList.remove('active_seguros')
    }
}

function galeria(e, base) {
    document.querySelector(`#foto_destaque-${base}`).src = e.src
    document.querySelector(`#foto_ref-${base}`).innerHTML = e.getAttribute('data-ref')
}

var swiper = new Swiper(".carrousel-institution", {
    slidesPerView: 3,
    spaceBetween: 0,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 5,
            spaceBetween: 70,
            depth: 100
        },
    }
});

function open_tab_catalogo(el, base) {
    document.querySelector('.galeria-btn span.active').classList.remove('active')
    document.querySelector('.active-tab').classList.remove('active-tab')
    el.classList.add('active')
    document.querySelector(`.js-${base}`).classList.add('active-tab')
}