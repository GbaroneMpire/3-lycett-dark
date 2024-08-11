const LCT_Theme = (function($){

  'use strict';

  const body = document.querySelector('body'),
        introSection = document.querySelector('#lct-side-by-side'),
        sbsImage = document.querySelector('.lct-side-by-side__image'),
        sbsNext = sbsImage.getAttribute('data-lct-img'),
        watchVideoButton = document.querySelector('.lct-watch-video');

  function afterLoad(){

    const vid = document.querySelector(".wp-video-shortcode");

    body.classList.add('lct-loaded');

    function endIntro(){
      setTimeout(()=> {
        body.classList.add('lct-home-intro-done');
      }, 1000);
    }

    if (vid) {
      vid.oncanplay = function(){
        endIntro();
      };
    } else {
      endIntro();
    }
  }

  function observeImage() {

    if (!sbsImage) return;

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

  function resetScroll() {
    window.onbeforeunload = function () {
      window.scrollTo(0, 0);
    }

    history.replaceState(null, null, ' ');
  }

  function init(){  

    window.addEventListener('DOMContentLoaded', afterLoad);

    observeImage();

    resetScroll();

    console.log($('#lct-watch-video'));

    $('#lct-watch-video').on('hidden.bs.modal', function (e) {
      console.log(e.relatedTarget);
    })

  }

  return {
    init: init
  }

})(jQuery);

LCT_Theme.init();