/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/supplierBase.js ***!
  \**************************************/
document.addEventListener("DOMContentLoaded", function () {
  //бургер меню
  $('.header__burger, .overlay').click(function () {
    $('.header').toggleClass('show');
    $(".wrapper").toggleClass('overflow');
  });
  $("#nav").on("click", ".nav__link", function (event) {
    $('.header').removeClass('show');
    $(".wrapper").removeClass('overflow');
  }); //плавный скролл

  $("body").on("click", "a[href^=\"#\"]", function (event) {
    event.preventDefault();
    var id = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({
      scrollTop: top
    }, 1500);
  }); //слайдеры

  var swiper = new Swiper(".base-program__swiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    autoHeight: false
  }); //аккардион

  $(".base-questions-accordion__head.active").next(".base-questions-accordion__body").slideDown();
  $('.base-questions-accordion').on('click', '.base-questions-accordion__head', function (e) {
    e.preventDefault();
    $(this).toggleClass("active").next('.base-questions-accordion__body').not(':animated').slideToggle();
  }); //модалки

  var baseOrder = $("#base-order").wgModal();
  $(document).ready(function () {
    $("#base-order").wgModal({
      triggerElement: '.base-order-open-modal',
      closeButton: true,
      onBeforeOpen: function onBeforeOpen(e) {
        $('html').addClass('overflow');
      },
      onBeforeClose: function onBeforeClose(e) {
        $('html').removeClass('overflow');
      }
    });
  });
  $(document).ready(function () {
    $("#base-order-ready").wgModal({
      triggerElement: '.base-order-ready-open-modal',
      closeButton: true,
      onBeforeOpen: function onBeforeOpen(e) {
        $('html').addClass('overflow');
        baseOrder.closeModal();
      },
      onBeforeClose: function onBeforeClose(e) {
        $('html').removeClass('overflow');
      }
    });
  });
});
/******/ })()
;