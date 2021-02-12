/**
 * External Dependencies
 */

import Swiper from 'swiper/bundle';
import AOS from 'aos/dist/aos';
import lozad from 'lozad';

const app = (function() {
  'use strict';

  // global
  let body = document.querySelector('body');

  function handleLazyLoad() {
    const observer = lozad('.lazy');
    observer.observe();
  }

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

  // append #listing to pagination links on management model archives
  function handlePagination() {
    let paginationLinks = document.querySelectorAll('.listing__pagination a');

    for (var i = 0; i < paginationLinks.length; i++) {
      paginationLinks[i].href += '#listing';
    }
  }

  // handle mobile menu on burger click
  function handleMobileMenu() {
    let headerBurger  = document.querySelector('.header__burger'),
        headerNav  = document.querySelector('.header__nav');

    headerBurger.addEventListener('click', function(){
      headerNav.classList.toggle('active');
      body.classList.toggle('overflow-y-hidden');

    })
  }

  function handleAccordion() {
    let accordion = document.querySelector('.accordion');

    if(accordion !== null) {
      accordion.addEventListener('click', function(e){
        if(e.target.classList.contains('accordion__tab')) {
          // toggle accordion's content
          e.target.nextElementSibling.classList.toggle('hidden');
          // rotate chevron
          e.target.children[1].classList.toggle('rotate-90');
        }
      })
    }
  }

  function handleTimeLineAnimation() {
    // animate on scroll library for date fade in
    AOS.init({
      offset: 100,
      duration: 1000,
      once: true
    })
  }

  return {
    init: function() {
      handleLazyLoad();
      handleSliders();
      handleAccordion();
      handlePagination();
      handleMobileMenu();
      handleTimeLineAnimation();
    }
  };
})();

app.init();
