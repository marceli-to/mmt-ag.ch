/**
 * Dependencies
 */
import Swiper from '../vendor/swiper.js';

var SwiperUi = (function() {

  var _initialize = function() {
    _bind();
  };

  var _bind = function() {
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      centeredSlides: true,
      direction: 'horizontal',
      speed: 800,
      spaceBetween: 8,
      breakpoints: {
        768: {
          spaceBetween: 16
        }
      },
      navigation: {
        nextEl: '.swiper-btn-next',
        prevEl: '.swiper-btn-prev',
      },
    });

    var changed = false;
    $('.swiper-btn-next').on('click', function () {
        if (changed === true) {
            changed = false;
            swiper.slideTo(0);
        }
        if (swiper.isEnd) changed = true;
    });
  };
  
  return {
    init:  _initialize,
  };
	
})();

// Initialize
$(function() {
  if ($('body').find('.swiper-container').length) {
    SwiperUi.init();
  }
});