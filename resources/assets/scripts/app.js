/**
 * External Dependencies
 */

// import Swiper from 'swiper/bundle';
// import lozad from 'lozad';

const app = (function() {
  'use strict';

  // global
  let body = document.querySelector('body');

  // utility
  function handleLazyLoad() {
    const observer = lozad('.lazy');
    observer.observe();
  }

  // blocks
  function handleSliders() {
    // hero Gutenberg block
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

      on: {
        init: function () {
          let pagination = document.querySelector('.hero .swiper-pagination');
          if(this.slides.length < 2) pagination.classList.add('hidden');
        },
      }
    })

    // case-studies Gutenberg block
    var caseStudiesSlider = new Swiper('.case-studies .swiper-container', {
      zoom : true,
      watchOverflow: true,
      spaceBetween: 32,
    
      pagination: {
        el: '.case-studies .swiper-pagination',
        clickable: true,
        renderBullet: function (index) {
          return `<div class="swiper-pagination-bullet"><span></span><span>CASE STUDY 0.${index + 1}</span></div>`;
        },
      },

      on: {
        init: function () {
          let pagination = document.querySelector('.case-studies .swiper-pagination');
          if(this.slides.length < 2) pagination.classList.add('hidden');
        },
      }
    })
  }

  function handleMobileMenu() {
    let headerBurger  = document.querySelector('.header__burger'),
        headerNav  = document.querySelector('.header__nav');

    headerBurger.addEventListener('click', function(){
      headerNav.classList.toggle('active');
      body.classList.toggle('overflow-y-hidden');

    })
  }

  return {
    init: function() {
      // handleLazyLoad();
      // handleSliders();
      // handleMobileMenu();
    }
  };
})();

app.init();
