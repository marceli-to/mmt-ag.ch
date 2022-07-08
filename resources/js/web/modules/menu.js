var Menu = (function() {
	
	// selectors
	var selectors = {
    html:       'html',
    body:       'body',
    menu:       '.js-menu',
    menuBtn:    '.js-menu-btn',
    subMenu:    '.js-sub-menu',
    subMenuBtn: '.js-sub-menu-btn',
    btnContact: '.js-btn-contact',
	};

  // css classes
  var classes = {
    active:   'is-active',
    inactive: 'is-inactive',
    visible:  'is-visible',
    hidden:   'is-hidden',
    open:     'is-open',
    over:     'is-over',
    hasMenu:  'has-menu',
  };

  var smallScreen  = window.matchMedia('(max-width:768px)');
  var mediumScreen = window.matchMedia('(min-width:769px)');

  // Init
  var _initialize = function() {
    _bind();
  };

  // Bind events
  var _bind = function() {
    $(selectors.body).on('click', selectors.menuBtn, function(){
      if (smallScreen.matches) {
        _toggle($(this));
      }
    });

    $(selectors.body).on('click', selectors.subMenuBtn, function(e){
      if (smallScreen.matches) {
        e.preventDefault();
        _toggleSub($(this));
      }
    });

    $(selectors.body).on('mouseover', selectors.subMenuBtn, function(){
      if (mediumScreen.matches) {
        _showSub($(this));
      }
    });

    $(selectors.body).on('mouseleave', selectors.subMenu, function(){
      if (mediumScreen.matches) {
        _hideSub($(this));
      }
    });

    $(selectors.body).on('mouseover', selectors.btnContact, function(){
      if (mediumScreen.matches) {
        _clearSub();
        $(selectors.subMenuBtn + '.' + classes.active).addClass(classes.inactive);
      }
    });

    $(selectors.body).on('mouseleave', selectors.menu, function(){
      if (mediumScreen.matches) {
        _clearSub();
      }
    });
    
  };

  var _toggle = function() {
    $(selectors.menu).toggleClass(classes.visible);
    $(selectors.menuBtn).toggleClass(classes.active);

    if ($(selectors.menu).hasClass(classes.visible)) {
      $(selectors.html).addClass(classes.hasMenu);
      $(selectors.subMenuBtn).each(function(){
        if ($(this).hasClass(classes.active)) {
          $(this).next('ul').show();
        }
      });
    }

    if (!$(selectors.menu).hasClass(classes.visible)) {
      $(selectors.html).removeClass(classes.hasMenu);
    }
  };

  var _toggleSub = function(el) {
    if (el.hasClass(classes.active)) {
      el.next('ul').hide();
      el.removeClass(classes.active);
    }
    else {
      $(selectors.subMenu).each(function(){
        $(this).hide();
        $(this).prev('a').removeClass(classes.active);
      });
      el.next('ul').show();
      el.addClass(classes.active);
    }
  };

  var _showSub = function(el) {
    _clearSub();
    el.next('ul').show();
    $(selectors.subMenuBtn + '.' + classes.active).addClass(classes.inactive);
    $(selectors.btnContact).addClass(classes.inactive);

    el.addClass(classes.over).removeClass(classes.inactive);
    $(selectors.html).addClass(classes.hasMenu);
  };

  var _hideSub = function(el) {
    el.hide();
    $(selectors.subMenuBtn).each(function(){
      $(this).removeClass(classes.over);
    });
    $(selectors.subMenuBtn + '.' + classes.active).removeClass(classes.inactive);
    $(selectors.html).removeClass(classes.hasMenu);
  };

  var _clearSub = function() {
    $(selectors.subMenu).each(function(){
      $(this).hide();
    });
    $(selectors.subMenuBtn).each(function(){
      $(this).removeClass(classes.over);
      $(this).removeClass(classes.inactive);
    });
    $(selectors.btnContact).removeClass(classes.inactive);
    $(selectors.html).removeClass(classes.hasMenu);
  };


  /* --------------------------------------------------------------
    * RETURN PUBLIC METHODS
    * ------------------------------------------------------------ */

  return {
    init:  _initialize,
  };
	
})();

// Initialize
$(function() {
  Menu.init();
});

