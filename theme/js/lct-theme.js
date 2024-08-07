'use strict';

const LCT_Theme = (function(){

  let canPlay = false;

  const body = document.querySelector('body'),
        introSection = document.querySelector('#lct-side-by-side');

  const vid = document.querySelector(".wp-video-shortcode");
  vid.oncanplay = function() {
    canPlay = true;
  };

  function afterLoad(){
    body.classList.add('lct-loaded');

    setTimeout(() => {
      if (canPlay) body.classList.add('lct-home-intro-done');
    }, 1000);
  
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
      threshold: [0.1, .25, .75]
    };

    let callback = (entries, observer) => {
      entries.forEach((entry) => {
        console.log(entry);
      });
    };
    
    let observer = new IntersectionObserver(callback, options);
    observer.observe(introSection);
  }

  return {
    init: init
  }

})();

LCT_Theme.init();