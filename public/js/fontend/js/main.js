// $(document).ready(function () {
//     window.onscroll = function () {
//         myFunction();
//     };

//     var navbar = document.querySelector(".product-nav-main");
//     var sticky = navbar.offsetTop;

//     function myFunction() {
//         if (window.pageYOffset >= sticky) {
//             navbar.classList.add("sticky");
//         } else {
//         }
//     }
// });

// $(window).scroll(function () {
//     if ($(this).scrollTop() > 380) {
//         $(".product-nav-main").addClass("sticky");
//     } else {
//         $(".product-nav-main").removeClass("sticky");
//     }
// });

$(document).ready(function () {
    var s = $(".product-nav-main");
    var pos = s.position();
    $(window).scroll(function () {
        var windowpos = $(window).scrollTop();
        if ((windowpos >= pos.top) & (windowpos <= 5800)) {
            s.addClass("sticky");
        } else {
            s.removeClass("sticky");
        }
    });
});

window.addEventListener("scroll", function () {
    var header = document.querySelector("#header-page");
    header.classList.toggle("stickyMenu", window.scrollY > 150);
});

function multiplyBy() {
    num1 = document.getElementById("totalStu").value;
    // num2 = document.getElementById("secondNumber").value;
    document.getElementById("result").innerHTML = num1 * 15;
}

function myFunction() {
    var element = document.querySelector("#header-page");
    element.classList.toggle("moblie-menu");
}

/*=============== SHOW MENU ===============*/
/*=============== Core ===============*/

/*=============== HOME SWIPER ===============*/

/*=============== CHANGE BACKGROUND HEADER ===============*/

/*=============== NEW SWIPER ===============*/

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/

/*=============== SHOW SCROLL UP ===============*/

/*=============== SCROLL REVEAL ANIMATION ===============*/
