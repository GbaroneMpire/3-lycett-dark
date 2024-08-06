(function(){
  const 
    gridSelector = '.lct-gallery-image',
    grid = new Isotope('.lct-filterable', {
      itemSelector: gridSelector,
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer'
      }
    }),
    buttonGroup = document.querySelector('.lct-filters'),
    filterButtons = document.querySelectorAll('.lct-filter-button'),
    getPswpItems = links => {
      return [...links].reduce((items, link) => {

        const sizes = {
          width: link.getAttribute('data-size-width'),
          height: link.getAttribute('data-size-height')
        }
        
        items.push({
          src: link.href,
          w: parseInt(sizes.width),
          h: parseInt(sizes.height),
          title: link.getAttribute('data-caption')
        });
  
        return items;
  
      }, []);
    };

    let pswpSelector = gridSelector,
        pswpLinks = document.querySelectorAll(pswpSelector),
        pswpItems = getPswpItems(pswpLinks);

    function initIsotope() {

      buttonGroup.addEventListener('click', e => {
        const target = e.target,
              filterSelector = target.getAttribute('data-filter'),
              currFilter = (filterSelector !== '*') ? filterSelector : '';
  
        if ( !matchesSelector( target, 'button' ) ) return;
  
        filterButtons.forEach(button => button.classList.remove('lct-active'));
  
        grid.arrange({filter: filterSelector});
        target.classList.add('lct-active');

        pswpSelector = `${gridSelector}${currFilter}`;
        pswpLinks = document.querySelectorAll(pswpSelector);
        pswpItems = getPswpItems(pswpLinks);
  
      });
    }

    function PSWP() {

      const pswpElement = document.querySelectorAll('.pswp')[0];

      function initPSWP(items, currIndex){

        const options = {
          index: currIndex, // start at first clicked slide
          getThumbBoundsFn: function(index) {

            // find thumbnail element
            var thumbnail = pswpLinks[index];
          
            // get window scroll Y
            var pageYScroll = window.scrollY || document.documentElement.scrollTop; 
            // optionally get horizontal scroll
          
            // get position of element relative to viewport
            var rect = thumbnail.getBoundingClientRect(); 
          
            // w = width
            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
          
          }
        };

        // Initializes and opens PhotoSwipe
        const gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

        gallery.init();

      }
        
      function onLinkClick(e){

        e.preventDefault();

        const currIndex = [...pswpLinks].indexOf(this);

        initPSWP(pswpItems, currIndex);
      }

      pswpLinks.forEach(function(link){
        link.addEventListener('click', onLinkClick );
      });					
    }

    initIsotope();
    PSWP();

})();