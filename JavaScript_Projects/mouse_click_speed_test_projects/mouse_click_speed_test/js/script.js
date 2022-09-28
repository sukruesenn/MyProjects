let rTime = document.getElementById("remaining-time");
let click = document.getElementById("clicked");
let status = document.getElementById("status");

let counter = 5;
let clicked = 0;

let clickControlBoolean;
let tiklamaBitik = false;

const clickArea = document.getElementById("box");

click.innerHTML = clicked;

clickArea.addEventListener("click", clickControl);

function clickControl(){
    clickControlBoolean = true;
    click.innerHTML = clicked;
    if(tiklamaBitik == false){
        clicked++;
    }
}

timeControl();

function timeControl(){
   setInterval(function(){
    if(clickControlBoolean == true){
        counter --;
        if(counter > 0){
            rTime.innerHTML = counter;
            tiklamaBitik = false;
            status.innerHTML = "Started!";
            status.style.color = "#32ff7e";
        }
        else{
            tiklamaBitik = true;
            rTime.innerHTML = "Time Out!";
            status.innerHTML = "Finished!";
            rTime.style.color = "#ff3838";
            click.style.color = "#32ff7e";
            clickArea.style.display = "none";
        }
    }
   }, 1000);
}