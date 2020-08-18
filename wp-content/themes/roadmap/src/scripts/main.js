var $ = require("jquery");

$(window)
     .on('load', function () {
          $('body').show();
     })
     .scroll(function () {
          var $scroll = $(window).scrollTop();
          var $headerHeight = $('.sticky-header').height();
          //>=, not <=
          if ($scroll >= $headerHeight) {
               //clearHeader, not clearheader - caps H
               $(".sticky-header").addClass("sticky-header--sticky");
               $('body').css('padding-top', $headerHeight);
          } else {
               $(".sticky-header").removeClass("sticky-header--sticky");
               $('body').css('padding-top', 0);
          }
     }); //missing );

import 'bootstrap/js/src/alert';
import 'bootstrap/js/src/button';
// import 'bootstrap/js/src/carousel';
import 'bootstrap/js/src/collapse';
import 'bootstrap/js/src/dropdown';
import 'bootstrap/js/src/modal';
import 'bootstrap/js/src/popover';
import 'bootstrap/js/src/scrollspy';
import 'bootstrap/js/src/tab';
import 'bootstrap/js/src/toast';
import 'bootstrap/js/src/tooltip';
import 'bootstrap/js/src/util';
import './nav';
import './slider';


// import Alert from './alert'
// import Button from './button'
// import Carousel from './carousel'
// import Collapse from './collapse'
// import Dropdown from './dropdown'
// import Modal from './modal'
// import Popover from './popover'
// import Scrollspy from './scrollspy'
// import Tab from './tab'
// import Toast from './toast'
// import Tooltip from './tooltip'
// import Util 

// export {
//      Util,
//      Alert,
//      Button,
//      Carousel,
//      Collapse,
//      Dropdown,
//      Modal,
//      Popover,
//      Scrollspy,
//      Tab,
//      Toast,
//      Tooltip
// }

