document.addEventListener("DOMContentLoaded", function () {

    let officeSlider = new Swiper('.office__slider', {
        centeredSlides: true,
        slidesPerView: 3,
        spaceBetween: 10,
        autoHeight: true,
        keyboard: true,
        loop: true,
        //initialSlide: 1,
        pagination: {
            el: '.swiper-img-pagination',
        },
        breakpoints: {
            556: {
                spaceBetween: 20
            }
        }
    });

    var swiperDiet = new Swiper(".calendar__slider-diet", {
        spaceBetween: 0,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var program__slider = new Swiper(".program__slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        IOSEdgeSwipeDetection: true,
        allowSlidePrev: true,
        pagination: {
            el: ".program-pagination",
            clickable: true,
        },
        breakpoints: {
            999: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
        }
    });

    $('.close-nav, .burger, .overlay').click(function () {
        $('.overlay').toggleClass('show');
        $('nav').toggleClass('show');
        $('body').toggleClass('overflow');
    });
    $(document).ready(function () {
        $("#nav").on("click", "a", function (event) {
            let id = $(this).attr('href');
            try {
                let top = $(id).offset().top;
                event.preventDefault();
                $('body,html').animate({scrollTop: top}, 1500);
                $('.overlay').removeClass('show');
                $('nav').removeClass('show');
                $('body').removeClass('overflow');
            } catch {
            }
        });
    });
    //плавный скролл
    $("body").on("click", "a[href^=\"#\"]", function (event) {
        event.preventDefault();
        let id = $(this).attr('href').substring(1);
        let top = document.getElementById(id).offsetTop;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $('#login').on('shown.bs.modal', function () {
        $('#login').trigger('focus')
    })
    $('#buy').on('shown.bs.modal', function () {
        $('#buy').trigger('focus')
    })
    $('#lose').on('shown.bs.modal', function () {
        $("#login").modal('hide');
    });
    $('#login').on('shown.bs.modal', function () {
        $("#lose").modal('hide');
    });


    $('#register').on('shown.bs.modal', function () {
        $("#login").modal('hide');
    });
    $('#login').on('shown.bs.modal', function () {
        $("#register").modal('hide');
    });

    $('#diet').on('shown.bs.modal', function () {
        $("#diet-simple").modal('hide');
    });
    $('#diet-simple').on('shown.bs.modal', function () {
        $("#diet").modal('hide');
    });

    $(document).on('hidden.bs.modal', '.modal', function () {
        $('.modal:visible').length
            ? $(document.body).addClass('modal-open')
            : $(document.body).css({paddingRight: 0});
    });
    $('#subscription').on('shown.bs.modal', function () {
        $('#subscription').trigger('focus')
    })
    $('#workout').on('shown.bs.modal', function () {
        $('#workout').trigger('focus')
    })
    $(".default__option").click(function () {
        $(this).parent().toggleClass("active");
    })

    $(".select__ul li").click(function () {
        var currentele = $(this).html();
        $(".default__option li").html(currentele);
        $(this).parents(".select__wrap").removeClass("active");
    })

    const tabs = document.querySelector(".question-tab");
    const tabButton = document.querySelectorAll(".question-tab__btn");
    const contents = document.querySelectorAll(".question-tab__content");
    tabs.onclick = function (e) {
        var id = e.target.dataset.id;

        if (id) {
            tabButton.forEach(function (btn) {
                btn.classList.remove("active");
            });
            e.target.classList.add("active");
            contents.forEach(function (content) {
                content.classList.remove("active");
            });
            var element = document.getElementById(id);
            element.classList.add("active");
        }
    };

    function findVideos() {
        let videos = document.querySelectorAll('.video');

        for (let i = 0; i < videos.length; i++) {
            setupVideo(videos[i]);
        }
    }

    function setupVideo(video) {
        let link = video.querySelector('.video__link');
        let media = video.querySelector('.video__media');
        let button = video.querySelector('.video__button');
        let id = parseMediaURL(media);

        video.addEventListener('click', () => {
            let iframe = createIframe(id);

            link.remove();
            button.remove();
            video.appendChild(iframe);
        });

        link.removeAttribute('href');
        video.classList.add('video--enabled');
    }

    function parseMediaURL(media) {
        let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
        let url = media.src;
        let match = url.match(regexp);

        return match[1];
    }

    function createIframe(id) {
        let iframe = document.createElement('iframe');

        iframe.setAttribute('allowfullscreen', '');
        iframe.setAttribute('allow', 'autoplay');
        iframe.setAttribute('src', generateURL(id));
        iframe.classList.add('video__media');

        return iframe;
    }

    function generateURL(id) {
        let query = '?rel=0&showinfo=0&autoplay=1';

        return 'https://www.youtube.com/embed/' + id + query;
    }

    findVideos();

    $('#video').on('shown.bs.modal', function () {
        $('#video').trigger('focus')
    })

    //БАЗЫ!!!

    //бургер меню
    $('.header__burger, .overlay').click(function () {
        $('.header').toggleClass('show');
        $(".wrapper").toggleClass('overflow');
    });
    $("#nav").on("click", ".nav__link", function (event) {
        $('.header').removeClass('show');
        $(".wrapper").removeClass('overflow');
    });

    //плавный скролл
    $("body").on("click", "a[href^=\"#\"]", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    //слайдеры
    var swiper = new Swiper(".base-program__swiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        autoHeight: false,
    });

    //аккардион
    $(".base-questions-accordion__head.active").next(".base-questions-accordion__body").slideDown();
    $('.base-questions-accordion').on('click', '.base-questions-accordion__head', function (e) {
        e.preventDefault();
        $(this)
            .toggleClass("active")
            .next('.base-questions-accordion__body')
            .not(':animated')
            .slideToggle();
    })


    //модалки
    var baseOrder = $("#base-order").wgModal();
    $(document).ready(function () {
        $("#base-order").wgModal({
            triggerElement: '.base-order-open-modal',
            closeButton: true,
            onBeforeOpen: function (e) {
                $('html').addClass('overflow');
            },
            onBeforeClose: function (e) {
                $('html').removeClass('overflow');
            },
        });
    });
    $(document).ready(function () {
        $("#base-order-ready").wgModal({
            triggerElement: '.base-order-ready-open-modal',
            closeButton: true,
            onBeforeOpen: function (e) {
                $('html').addClass('overflow');
                baseOrder.closeModal();
            },
            onBeforeClose: function (e) {
                $('html').removeClass('overflow');
            },
        });
    });


})
