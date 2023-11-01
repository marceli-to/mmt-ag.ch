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
      _toggle();
    });
  };

  var _toggle = function() {
    $(selectors.wrap).toggleClass(classes.hidden);

    // if the video is shown, scroll into view
    if (!$(selectors.wrap).hasClass(classes.hidden)) {
      $('html, body').animate({
        scrollTop: $(selectors.wrap).offset().top - 60
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
