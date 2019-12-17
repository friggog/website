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
