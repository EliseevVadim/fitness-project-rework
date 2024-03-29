document.addEventListener("DOMContentLoaded", function () {
    //прелоудер
    window.onload = function () {
        window.setTimeout(function () {
            document.querySelector(".loader").style.display = "none";
            document.body.classList.remove('overflow_body');
        }, 500);
    }

    //бургер меню
    $('.header__burger, .overlay').click(function () {
        $('.header').toggleClass('show');
        $('body').toggleClass('overflow');
    });
    $("#nav").on("click", ".nav-close", function (event) {
        $('.header').removeClass('show');
        $('body').removeClass('overflow');
    });

    //плавный скролл
    $("body").on("click", "a[href^=\"#\"]", function (event) {
        event.preventDefault();
        let id = $(this).attr('href').substring(1);
        let top = document.getElementById(id).offsetTop;
        $('body,html').animate({scrollTop: top}, 1500);
    });


    //слайдеры
    var swiper = new Swiper(".base-program__swiper", {
        slidesPerView: 2,
        spaceBetween: 20,
        // autoHeight: true,
        breakpoints: {
            998: {
                slidesPerView: 2,
                spaceBetween: 30,
            }
        }
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
    var baseOrder1 = $("#base-order-1").wgModal();
    $(document).ready(function () {
        $("#base-order-1").wgModal({
            triggerElement: '.base-order-open-modal-1',
            closeButton: true,
            onBeforeOpen: function (e) {
                $('body').addClass('overflow');
            },
            onBeforeClose: function (e) {
                $('body').removeClass('overflow');
            },
        });
    });
    $(document).ready(function () {
        $("#base-order-ready-1").wgModal({
            triggerElement: '.base-order-ready-open-modal-1',
            closeButton: true,
            onBeforeOpen: function (e) {
                $('body').addClass('overflow');
                baseOrder1.closeModal();
            },
            onBeforeClose: function (e) {
                $('body').removeClass('overflow');
            },
        });
    });

    var baseOrder2 = $("#base-order-2").wgModal();
    $(document).ready(function () {
        $("#base-order-2").wgModal({
            triggerElement: '.base-order-open-modal-2',
            closeButton: true,
            onBeforeOpen: function (e) {
                $('body').addClass('overflow');
            },
            onBeforeClose: function (e) {
                $('body').removeClass('overflow');
            },
        });
    });
    $(document).ready(function () {
        $("#base-order-ready-2").wgModal({
            triggerElement: '.base-order-ready-open-modal-2',
            closeButton: true,
            onBeforeOpen: function (e) {
                $('body').addClass('overflow');
                baseOrder2.closeModal();
            },
            onBeforeClose: function (e) {
                $('body').removeClass('overflow');
            },
        });
    });
})

