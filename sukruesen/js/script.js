var x = 0;
//Navbar
let menu = document.querySelector('#menu-btn');
let navbarLinks = document.querySelector('.header .navbar .links');
let navbar = document.querySelector('.navbar');
let fatimes = document.querySelector('.fa-times');

menu.onclick = () =>{
	menu.classList.toggle('fa-times');
	navbarLinks.classList.toggle('active');
	x += 1;
	if (window.scrollY < 1 && x == 1){
		navbar.style.background = "rgba(0,0,0,.95)";
	}else if (window.scrollY < 1 && x == 2){
		navbar.style.background = "transparent";
		x = 0;
	}
}

navbarLinks.onclick = () =>{
	menu.classList.remove('fa-times');
	navbarLinks.classList.remove('active');
	if (window.scrollY < 1){
		navbar.style.background = "transparent";
		x = 0;
	}
}

window.onscroll = () =>{
	if (window.scrollY > 0){
		navbar.classList.add('active');
		navbar.style.background = "#fff";
	}else{
		navbar.classList.remove('active');
		navbar.style.background = "transparent";
		x = 0;
	}
}

