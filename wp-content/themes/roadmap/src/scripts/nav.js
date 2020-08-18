(function () {
     // var hamburger = {
     //      navToggle: document.querySelector('.primary-menu__ham'),
     //      nav: document.querySelector('.header-nav__main'),
     //      doToggle: function (e) {
     //           // e.preventDefault();
     //           this.navToggle.classList.toggle('expanded');
     //           this.nav.classList.toggle('expanded');
     //      }
     // };
     // hamburger.navToggle.addEventListener('click', function (e) { hamburger.doToggle(e); });
     // hamburger.nav.addEventListener('click', function (e) { hamburger.doToggle(e); });

     var $menu_icon = document.getElementById("navi_btn");
     var $menu_nav = document.getElementById("navi_menu");
     $menu_icon.addEventListener("click", function () {
          this.classList.toggle("expanded");
          $menu_nav.classList.toggle("expanded");
     });

}());