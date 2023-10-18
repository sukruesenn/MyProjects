let mainCursor = document.querySelector(".main-cursor");
let mainCursorOutline = document.querySelector(".main-cursor-outline");
let a = document.querySelectorAll("a");
let headerMenu = document.getElementById("header");
let mobileNav = document.getElementById("mobileNav");
let mobileDropDownMenuWrapper = document.querySelector(".mobile-dropdown-menu");
let mobileDropDownMenu = document.querySelector(".mobile-nav-dropdown");
let menuBtn = document.getElementById("menuBtn");
let closeBtn = document.getElementById("closeBtn");
let overlay = document.getElementById("overlay");
let heroCircleBg = document.querySelector(".hero-circle-bg");
let popUp = document.querySelector(".popup");
let popUpWrapper = document.querySelector(".popup-wrapper");
let popUpCloseBtn = document.querySelector(".popup-close-btn");

// Modal
window.addEventListener("load", () => {
    popUp.classList.toggle("is-visible");
    popUpWrapper.classList.toggle("is-visible");
});

popUpCloseBtn.addEventListener("click", () => {
    popUp.classList.remove("is-visible");
    popUpWrapper.classList.remove("is-visible");
});

// Custom Cursor
window.addEventListener("mousemove", function (e){
    const posX = e.clientX;
    const posY = e.clientY;
    
    mainCursor.style.left = `${posX}px`;
    mainCursor.style.top = `${posY}px`;

    mainCursorOutline.style.left = `${posX}px`;
    mainCursorOutline.style.top = `${posY}px`;

    mainCursorOutline.animate({
        left: `${posX}px`,
        top: `${posY}px`
    },
    {
        duration: 500,
        fill: "forwards"
    });
});

a.forEach(item => {
    item.addEventListener("mouseover", () => {
        mainCursorOutline.classList.add("cursor-hover");
    });
    item.addEventListener("mouseleave", () => {
        mainCursorOutline.classList.remove("cursor-hover");
    });
});


// Responsive Navbar
menuBtn.addEventListener("click", () => {
    mobileNav.classList.toggle("is-visible");
    overlay.classList.toggle("is-visible");
});

closeBtn.addEventListener("click", () => {
    mobileNav.classList.remove("is-visible");
    overlay.classList.remove("is-visible");
});

mobileDropDownMenuWrapper.addEventListener("click", () => {
    mobileDropDownMenu.classList.toggle("is-open");
});


// Change Header Background on Scrolling
window.addEventListener("scroll", () => {
    if (this.scrollY >= 1) {
       headerMenu.classList.add("on-scroll");
    }else{
       headerMenu.classList.remove("on-scroll");
    }
});


// Menu Hover Effect
$(document).ready(function (){
    $(".navigation-menu").hover(function () {
        overlay.classList.toggle("is-visible");
    });
});


// Mouse Movement Effect
document.addEventListener("mousemove", parallax);

function parallax(e){
    if(screen.width >= 991){
        document.querySelectorAll(".movement").forEach(function(move){
    
            let moving_move = move.getAttribute("data-value");
            let x = (e.clientX * moving_move) / 250;
            let y = (e.clientY * moving_move) / 250;
    
            move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
    
        });
    }
};



// Insurance Slider Settings
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dot: true,
    responsive:{
        0:{
            items: 1
        },
        390:{
            items: 2,
            margin: 20,
            center: false
        },
        767:{
            items: 3,
            center: true
        }
    }
})
