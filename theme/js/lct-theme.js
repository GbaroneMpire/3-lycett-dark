'use strict';

const LCT_Theme = (function(){

  const body = document.querySelector('body'),
        introSection = document.querySelector('#lct-side-by-side'),
        sbsImage = document.querySelector('.lct-side-by-side__image'),
        sbsNext = sbsImage.getAttribute('data-lct-img');

  function afterLoad(){

    const vid = document.querySelector(".wp-video-shortcode");

    body.classList.add('lct-loaded');

    function endIntro(){
      setTimeout(()=> {
        console.log('intro done');
        body.classList.add('lct-home-intro-done');
      }, 1000);
    }

    if (vid) {
      vid.oncanplay = function(){
        console.log('canplay')
        endIntro();
      };
    } else {
      endIntro();
    }
  }

  function init(){
    window.addEventListener('DOMContentLoaded', afterLoad);

    window.onbeforeunload = function () {
      window.scrollTo(0, 0);
    }

    history.replaceState(null, null, ' ');

    let options = {
      root: document.querySelector("#scrollArea"),
      rootMargin: "0px",
      threshold: 1
    };

    let callback = (entries, observer) => {
      entries.forEach((entry) => {

        if (entry.isIntersecting) {

          sbsImage.querySelector('.lct-swap').classList.add('lct-active');
        } else {
          sbsImage.querySelector('.lct-swap').classList.remove('lct-active');
        }
      });
    };
    
    let observer = new IntersectionObserver(callback, options);
    observer.observe(sbsImage);
  }

  return {
    init: init
  }

})();

LCT_Theme.init();