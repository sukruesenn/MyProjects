let header = document.querySelector('header');
let menu = document.querySelector('#menu-icon');
var navbar = document.querySelector('.navbar');

menu.onclick = () => {
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}
let darkMode = document.querySelector('#darkMode');

darkMode.onclick = () => {
    if(darkMode.classList.contains('fa-moon')){
        darkMode.classList.replace('fa-moon', 'fa-sun');
        document.body.classList.add('active');
    }
    else{
        darkMode.classList.replace('fa-sun', 'fa-moon');
        document.body.classList.remove('active');
    }
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}