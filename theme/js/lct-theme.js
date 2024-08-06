'use strict';

const LCT_Theme = (function(){

  const body = document.querySelector('body');

  function afterLoad(){
    body.classList.add('lct-loaded');

    setTimeout( () => body.classList.add('lct-home-intro-done'), 1000);
  }

  function init(){
    window.addEventListener('DOMContentLoaded', afterLoad);
  }

  return {
    init: init
  }

})();

LCT_Theme.init();