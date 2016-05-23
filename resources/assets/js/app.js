/************************* Owl carousel ***************************************/
 $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })

/***************************** Up to top js ***************************************/

$(document).ready(function() {
        
        $().UItoTop({ easingType: 'easeOutQuart' });
        
      });

/******************************Carousel Bootstrap**********************************/
$('.carousel').carousel({
   interval: 5000
  });

/******************************SmothScroll*****************************************/
smoothScroll.init();