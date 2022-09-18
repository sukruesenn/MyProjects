var passwordInput = document.getElementById('password-input');
var generateBtn = document.getElementById('generate-btn');
var copyBtn = document.getElementById('copy-btn');
var darkThemeController = false;
var darkLightController = 0;
var inputBackgroundController = 0;

generateBtn.addEventListener('click', generatePassword);

function generatePassword(){
    generateButtonSound();
    buttonStyleChange();
    var chars = '0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var passwordLenght = 12;
    var password = '';

    for(var i = 0; i < passwordLenght; i++){
        var randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.substring(randomNumber, randomNumber + 1);
    }
    passwordInput.value = password;
}

copyBtn.addEventListener('click', copyPassword);

function copyPassword(){
    copyButtonSound();
    passwordInput.select();
    document.execCommand('copy');
}

function buttonStyleChange(){
    passwordInput.style.fontSize = '16px';
    passwordInput.style.fontWeight = '600';
}

function generateButtonSound(){
    const clickAudio = new Audio();
    clickAudio.src = './sounds/click.mp3';
    clickAudio.play();
}

function copyButtonSound(){
    const copyAudio = new Audio();
    copyAudio.src = './sounds/copy.mp3';
    copyAudio.play();
}

// Time

var hour = document.getElementById('hour');
var minute = document.getElementById('minute');
var second = document.getElementById('second');

function time(){
    var date = new Date();
    hour.innerHTML = 'Hour: ' + date.getHours() + ' |';
    minute.innerHTML = date.getMinutes() + ' |';
    second.innerHTML = date.getSeconds();
}

setInterval(time, 1000);

// Dark Theme

var darkTheme = document.getElementById('darkTheme');
darkTheme.addEventListener('click', darkThemeFunction);

function darkThemeFunction(){
    darkThemeSound();
    darkLightController += 1;
    if(darkLightController == 1){
        darkTheme.innerHTML = 'Light';
        passwordInput.style.color = '#5341c4';
    }
    else{
        darkTheme.innerHTML = 'Dark';
        passwordInput.style.color = '#0984e3';
        darkLightController = 0;
    }
    darkThemeController = true;
    if(darkThemeController == true){
        document.body.classList.toggle('dark');
        lightTheme.style.visibility = 'visible';
        darkTheme.style.visibility = 'hidden';
    }
    return;
}

function darkThemeSound(){
    const darkThemeSound = new Audio();
    darkThemeSound.src = './sounds/click2.mp3';
    darkThemeSound.play();
}
// Light Theme

// var lightTheme = document.getElementById('lightTheme');
// lightTheme.addEventListener('click', lightThemeFunction);

// function lightThemeFunction(){
//     darkThemeController = false;
//     if(darkThemeController == false){
//         document.body.classList.remove('dark');
//         darkTheme.style.visibility = 'visible';
//         lightTheme.style.visibility = 'hidden';
//     }
// }