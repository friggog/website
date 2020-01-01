function showMenu() {
    "use strict"
    var menuUl = document.getElementById('navul');
    if (menuUl.classList.contains('show')) {
        menuUl.classList.remove('show');
    } else {
        menuUl.classList.add('show');
    }
}

function toggleVisibilty(el) {
    "use strict";
    var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
    if (isMobile) {
        var menuUl = document.getElementById('navul');
        if (menuUl.classList.contains('show')) {
            menuUl.classList.remove('show');
        }
        var a, i;
        if (el.style.opacity == 1) {
            el.style.opacity = 0;
            a = el.getElementsByTagName('a');
            for (i = 0; i < a.length; i++) {
                a[i].style.visibility = 'hidden';
            }
        } else {
            el.style.opacity = 1;
            a = el.getElementsByTagName('a');
            for (i = 0; i < a.length; i++) {
                a[i].style.visibility = 'visible';
            }
        }
    }
}

function scrollSetup() {
    "use strict";
    // the header is (sometimes) white, while the bottom of the page is black
    // we want to change the background (and therefore overscroll) colour to
    // match this change
    window.addEventListener("scroll", function(e) {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > 0) {
            document.body.style.backgroundColor = "black";
        }
        else {
            document.body.style.backgroundColor = "white";
        }
    });
    // currently safari gives overscroll with standard scroll even, but chrome only gives it with overscroll
    // under experimental features, presumably this will become mainstream at some point
    window.addEventListener("overscroll", function(e) {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (e.deltaY > 0) {
            document.body.style.backgroundColor = "black";
        }
        else {
            document.body.style.backgroundColor = "white";
        }
    });
}
