window.onscroll = function() {navScroll()};
var navbar = document.getElementById('stickyNav');
var sticky = navbar.offsetTop;

function navScroll() {
    if(window.pageYOffset >= sticky) {
        navbar.classList.add('nav-sticky');
    }
    else {
        navbar.classList.remove('nav-sticky');
    }
}