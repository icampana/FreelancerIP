var ipDesignOptions = {
  'textColor': function(value) {
    $('.ipModuleForm .ipmLabel, .ipWidget-IpText td, .ipWidget-Text').css('color', value);
    ipDesign.reloadLessFiles(['theme']);
  },

  'bodyBackgroundColor': function(value) {
    'use strict';
    $('body').css('background-color', value);
  },
  'navbar-inverse-bg': function(value) {
    'use strict';
    $('.navbar-inverse').css('background-color', value);
  },
  'navbar-default-link-active-bg': function(value) {
    'use strict';
    $('.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus').css('background-color', value);
  },
  'bg-footer': function(value) {
    'use strict';
    $('.footer').css('background-color', value);
    ipDesign.reloadLessFiles(['theme']);
  }
};
