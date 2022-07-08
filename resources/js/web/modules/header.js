var Header = (function() {

  var mq = {
    narrow: window.matchMedia("(max-height: 960px) and (min-width: 768px)"),
    normal: window.matchMedia("(min-height: 960px) and (min-width: 768px)"),
  };

  var _initialize = function() {

    
    $(window).scroll(function() {
      var pos = $(document).scrollTop();
      if (mq.narrow.matches && $('body').hasClass('is-detail')) {
        if (pos > 5) {
          $('html').addClass('screen-narrow');
        }
        else {
          $('html').removeClass('screen-narrow');
        }
      }
    });
    

    $(window).resize(function() {
      if (mq.normal.matches) {
        $('html').removeClass('screen-narrow');
      }
    });
  };
  
  /* --------------------------------------------------------------
  * RETURN PUBLIC METHODS
  * ------------------------------------------------------------ */
        
  return {
    init: _initialize,
  };

})();

// Initialize
$(function() {
  Header.init();
});