const body = document.querySelector("body");
const title = document.querySelector("h1");
const btn = document.querySelector(".btn");
const hexColorInput = document.querySelector("input");
var copyBtn = document.querySelector(".copy-btn");
var copiedNotification = document.querySelector("span");
let delay;

btn.addEventListener("click", changeBackgroundColor);

function changeBackgroundColor(){
    title.style.color = "#fff";
    copyBtn.style.color = "#fff";
    const colors = ["#00cec9", "#0984e3", "#2d3436", "#d63031", "#6c5ce7", "#e84393"];
    const randomColors = Math.floor(Math.random() * colors.length);
    console.log(randomColors);
    body.style.backgroundColor = colors[randomColors];

    hexColorInput.value = colors[randomColors];
}

copyBtn.addEventListener("click", copyColor);

function copyColor(){
    hexColorInput.select();
    document.execCommand("copy");
    copiedNotification.classList.toggle("active");
    delay = setTimeout(closeNotification, 700);
}

function closeNotification(){
    copiedNotification.classList.remove("active");
}