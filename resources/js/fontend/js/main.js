$(document).ready(function () {
    window.onscroll = function () {
        myFunction();
    };

    var navbar = document.querySelector(".product-nav-main") != null;
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.add(".sticky");
        } else {
            navbar.remove(".sticky");
        }
    }
});

window.addEventListener("scroll", function () {
    var header = document.querySelector("#header-page") != null;
    header.toggle(".stickyMenu", window.scrollY > 150);
});

function multiplyBy() {
    num1 = document.getElementById("totalStu").value;
    document.getElementById("result").innerHTML = num1 * 15;
}

function myFunction() {
    var element = document.querySelector("#header-page");
    element.toggle(".moblie-menu");
}

/*=============== SHOW MENU ===============*/
/*=============== Core ===============*/

/*=============== HOME SWIPER ===============*/

/*=============== CHANGE BACKGROUND HEADER ===============*/

/*=============== NEW SWIPER ===============*/

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/

/*=============== SHOW SCROLL UP ===============*/

/*=============== SCROLL REVEAL ANIMATION ===============*/
