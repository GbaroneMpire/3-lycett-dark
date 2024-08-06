'use strict';

const LCT_Theme = (function(){

  const body = document.querySelector('body');

  function afterLoad(){
    body.classList.add('lct-loaded');

    let vid = document.getElementById("video-18-1_html5");
    vid.oncanplay = function() {
      body.classList.add('lct-home-intro-done')
    };

  }

  function init(){
    window.addEventListener('DOMContentLoaded', afterLoad);
  }

  return {
    init: init
  }

})();

LCT_Theme.init();