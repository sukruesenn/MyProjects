//Navbar
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar .links');

menu.onclick = () =>{
	menu.classList.toggle('fa-times');
	navbar.classList.toggle('active');
}