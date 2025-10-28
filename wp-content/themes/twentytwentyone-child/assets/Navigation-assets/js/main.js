/**
* Template Name: NiceAdmin
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Updated: Apr 20 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Sidebar toggle
   */
  if (select('.toggle-sidebar-btn')) {
    on('click', '.toggle-sidebar-btn', function (e) {
      const btn = select('.toggle-sidebar-btn img');
      const body = select('body');

      body.classList.toggle('toggle-sidebar');

      if (body.classList.contains('toggle-sidebar')) {
        btn.src = themeData.themeUrl + "/assets/images/icon/toggleMenu.png";
        btn.alt = "Open Menu";
      } else {
        btn.src = themeData.themeUrl + "/assets/images/close-btn.png";
        btn.alt = "Close Menu";
      }
    })
  }

  // /**
  //  * Search bar toggle
  //  */
  // if (select('.search-bar-toggle')) {
  //   on('click', '.search-bar-toggle', function (e) {
  //     select('.search-bar').classList.toggle('search-bar-show')
  //   })
  // }

})();

