var models = [
    {"name": "BMW 116d", "img": "img/bmw.jpg", "link": "www.bmw.com"},
    {"name": "Mazda CX-3", "img": "img/mazda.jpg", "link": "www.mazda.com"},
    {"name": "Volvo S60", "img": "img/volvo.jpg", "link": "www.volvo.com"},
    {"name": "Skoda Superb", "img": "img/skoda.jpg", "link": "www.skoda.com"},
    {"name": "Honda Civic", "img": "img/honda.jpg", "link": "www.honda.com"},
];

var index = 0;
var settings = {
    "duration": 2000,
    "random": false
}
var interval;
init(settings);


document.getElementById("rightSlide").addEventListener('click', function(){
    index++;
    showSlide(index);
    console.log(index);
});

document.getElementById("leftSlide").addEventListener("click", function(){
    index--;
    showSlide(index);
    console.log(index);
});

function showSlide(i){

    i = index;

    if (i < 0){
        index = models.length - 1;
    }
    if (i >= models.length){
        index = 0;
    }
    
    document.querySelector(".card-title").textContent = models[index].name;
    document.querySelector(".card-img-top").setAttribute("src", models[index].img);
    document.querySelector(".card-link").setAttribute("href", models[index].link);
}

document.querySelectorAll(".arrow").forEach(function(item){
    item.addEventListener("mouseenter", function(){
        clearInterval(interval);
    });
});

document.querySelectorAll(".arrow").forEach(function(item){
    item.addEventListener("mouseleave", function(){
        init(settings);
    });
});

function init(settings){
    var prev;
    interval = setInterval(function(){
        if (settings.random){
            do{
                index = Math.floor(Math.random() * models.length);
            }while(index == prev)
            prev = index;
        }else{
            if (models.length == index + 1){
                index = 0;
            }
            showSlide(index);
            index++;
            console.log(index);
        }
        showSlide(index);

    }, settings.duration);
}