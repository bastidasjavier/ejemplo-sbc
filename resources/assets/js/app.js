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