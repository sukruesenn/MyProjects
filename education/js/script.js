let menubtn = document.querySelector('#menu-btn');
let navbarLinks = document.querySelector('.header .navbar');

menubtn.onclick = () => {
	menubtn.classList.toggle('fa-times');
	navbarLinks.classList.toggle('active');
}