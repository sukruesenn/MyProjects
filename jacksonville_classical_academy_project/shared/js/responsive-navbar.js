var menuBtn = document.querySelector('#menu-btn');
var closeMenuBtn = document.querySelector('#close-btn');
var sideNavbar = document.querySelector('.side-navbar');

menuBtn.addEventListener('click', () =>{
	sideNavbar.classList.toggle('active');
});

closeMenuBtn.addEventListener('click', () =>{
    sideNavbar.classList.remove('active');
});