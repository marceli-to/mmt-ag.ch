var GlobalUi = (function() {
	
	// selectors
	var selectors = {
    body:    'body',
    btnCv:   '.js-btn-cv',
    btnBack: '.js-btn-back',
  };
  
  // Init
  var _initialize = function() {
    _bind();
  };

  // Classes
  var classes = {
    active: 'is-active'
  };

  // Bind events
  var _bind = function() {
    $(selectors.body).on('click', selectors.btnCv, function(){
      _toggle($(this));
    });
    $(selectors.body).on('click', selectors.btnBack, function(){
      window.history.back();
    });
  };

  var _toggle = function(el) {
    $('[data-cv="'+el.data('target')+'"]').toggle();
    el.toggleClass(classes.active);
  };


  return {
    init:  _initialize,
  };
	
})();

// Initialize
$(function() {
  GlobalUi.init();
});

