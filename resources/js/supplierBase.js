document.addEventListener("DOMContentLoaded", function () {
    //прелоудер
    window.onload = function () {
        window.setTimeout(function () {
            document.querySelector(".loader").style.display = "none";
            document.body.classList.remove('overflow');
        }, 500);
    }

    //бургер меню
    $('.header__burger, .overlay').click(function () {
        $('.header').toggleClass('show');
        $("html").toggleClass('overflow');
    });
    $("#nav").on("click", ".nav-close", function (event) {
        $('.header').removeClass('show');
        $("html").removeClass('overflow');
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
        slidesPerView: 1,
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
    var baseOrderBusiness = $("#base-order-business").wgModal();
    $(document).ready(function () {
        $("#base-order-business").wgModal({
            triggerElement: '.base-order-open-modal-business',
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
        $("#base-order-ready-business").wgModal({
            triggerElement: '.base-order-ready-open-modal-business',
            closeButton: true,
            onBeforeOpen: function (e) {
                $('html').addClass('overflow');
                baseOrderBusiness.closeModal();
            },
            onBeforeClose: function (e) {
                $('html').removeClass('overflow');
            },
        });
    });

    var baseOrderFamily = $("#base-order-family").wgModal();
    $(document).ready(function () {
        $("#base-order-family").wgModal({
            triggerElement: '.base-order-open-modal-family',
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
        $("#base-order-ready-family").wgModal({
            triggerElement: '.base-order-ready-open-modal-family',
            closeButton: true,
            onBeforeOpen: function (e) {
                $('html').addClass('overflow');
                baseOrderFamily.closeModal();
            },
            onBeforeClose: function (e) {
                $('html').removeClass('overflow');
            },
        });
    });
})

