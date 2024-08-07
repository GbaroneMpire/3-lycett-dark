'use strict';

const LCT_Theme = (function(){

  let canPlay = false;

  const body = document.querySelector('body');

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
  }

  return {
    init: init
  }

})();

LCT_Theme.init();