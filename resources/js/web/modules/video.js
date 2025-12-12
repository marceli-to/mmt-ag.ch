var Video = (function() {
	
	// selectors
	var selectors = {
    html: 'html',
    body: 'body',
    btn:  '[data-toggle-video]',
    wrap: '[data-video]'
  };
  
  // Init
  var _initialize = function() {
    _bind();
  };

  // Classes
  var classes = {
    hidden: 'is-hidden'
  };

  // Bind events
  var _bind = function() {
    $(selectors.body).on('click', selectors.btn, function(){
      _toggle($(this));
    });
  };

  var _toggle = function($btn) {
    var videoKey = $btn.data('toggle-video');
    var $videoWrap = $('[data-video="' + videoKey + '"]');
    $videoWrap.toggleClass(classes.hidden);

    // if the video is shown, scroll into view
    if (!$videoWrap.hasClass(classes.hidden)) {
      $('html, body').animate({
        scrollTop: $videoWrap.offset().top - 60
      }, 500);
    }

  }

  return {
    init:  _initialize,
  };
	
})();

// Initialize
$(function() {
  Video.init();
});
