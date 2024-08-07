'use strict';

const LCT_Theme = (function(){

  const body = document.querySelector('body');

  const vid = document.querySelector(".wp-video-shortcode");
  vid.oncanplay = function() {
    body.classList.add('lct-home-intro-done')
  };

  function afterLoad(){
    body.classList.add('lct-loaded');
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