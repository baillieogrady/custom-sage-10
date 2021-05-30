/**
 * External Dependencies
**/

// import Swiper from 'swiper/bundle';
// import lozad from 'lozad';

const app = (function() {
  'use strict';

  // variables
  let _body = document.getElementsByClassName('body')[0];

  // utility functions 
  function toggleClass(element, cssClass){
    element.classList.toggle(cssClass);
  }

  // functions
  function handleLazyLoad() {
    const observer = lozad('.lazy');
    observer.observe();
  }

  function handleSliders() {
    // hero Gutenberg block slider
    var heroSlider = new Swiper('.hero .swiper-container', {
      zoom : true,
      watchOverflow: true,
    
      pagination: {
        el: '.hero .swiper-pagination',
        clickable: true,
        renderBullet: function (index) {
          return `<div class="swiper-pagination-bullet"><span>${index + 1}.0</span><span></span></div>`;
        },
      },
    })
  }

  function handleMobileMenu() {
    let burger  = document.getElementsByName('.burger')[0],
        headerNav  = document.getElementsByClassName('.header__nav')[0];

    burger.addEventListener('click', function(){
      toggleClass(headerNav, 'active');
      toggleClass(_body, 'disable-scrolling');
    })
  }

  function init(){
    // handleLazyLoad();
    // handleMobileMenu();
    // handleSliders();
  }

  return {
    init: init
  };
})();

app.init();