<<<<<<< HEAD
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
=======
/*** Function JS/Jquery ***/

/**** Carousel Bootstrap Section Home ****/
$('#home-carousel').carousel({
    interval: 5000,
    pause: "hover"
});

/**** Carousel Bootstrap Section Clientes ****/
$('#clients-carousel').carousel({
    interval: 5000,
    pause: "hover"
});
/**** SmothScroll****/
smoothScroll.init();


/**** Menu ****/
(function () {

    "use strict";

    var toggles = document.querySelectorAll(".c-hamburger");
    var nav = document.getElementById("nav-menu");

    for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
    }
    ;

    function toggleHandler(toggle) {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
            (nav.classList.contains("menu-expanded") === true) ? nav.classList.remove("menu-expanded") : nav.classList.add("menu-expanded");
        });
    }

    $(".nav-btn").click(function () {
        $("nav[id=nav-menu]").removeClass("menu-expanded");
        $("button[id=btn-hamburger]").removeClass("is-active");
    });

})();

/**** Up to top js ****/

$(document).ready(function () {

    $().UItoTop({easingType: 'easeOutQuart'});

});
/*** button captcha ***/
function enableBtn() {

    document.getElementById('buttonForm').removeAttribute('disabled');
}
>>>>>>> 18fcbbf014b340c6ba0d026053b3ce7af99bfe3f
