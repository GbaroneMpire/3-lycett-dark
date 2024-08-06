'use strict';

const LCT_Theme = (function(){

  const body = document.querySelector('body');

  function afterLoad(){
    body.classList.add('lct-loaded');

    const vid = document.querySelector(".wp-video-shortcode");
    // vid.oncanplay = function() {
    //   body.classList.add('lct-home-intro-done')
    // };

    console.log(vid)

  }

  function init(){
    window.addEventListener('DOMContentLoaded', afterLoad);

    window.onbeforeunload = function () {
      window.scrollTo(0, 0);
    }
  }

  return {
    init: init
  }

})();

LCT_Theme.init();