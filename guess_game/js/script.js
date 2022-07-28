let secretNumber = Math.trunc(Math.random() * 10) + 1;
let score = 0;
let attempsLeft = 3;
const checkBtn = document.querySelector(".check-btn");
const boxDiv =  document.querySelector(".box");
const header = document.querySelector("header");
const restartBtn =  document.querySelector(".restart-btn");

const statusMessage = function(status){
    document.querySelector(".status").textContent = status;
};

checkBtn.addEventListener("click", function(){
    const guess = Number(document.querySelector(".guess").value);
    if(attempsLeft == 1){
        console.log(attempsLeft);
        attemptsFinish();
    }
    if(!guess){
        statusMessage("Error!");
    }
    else if(guess === secretNumber){
        document.querySelector(".box").textContent = secretNumber;
        statusMessage("Status: Successful");
        successfulGuess();
    }
    else{
        statusMessage("Status: Wrong Guess!");
        attemptsControl();
    }
});

restartBtn.addEventListener("click", function(){
    reloadPage();
});

function attemptsControl(){
    attempsLeft -= 1;
    document.querySelector(".attempts-left span").textContent = attempsLeft + ' ';
}

function successfulGuess(){
    header.style.backgroundColor = "#83CE73";
    header.style.borderBottom = "0";
    boxDiv.style.backgroundColor = "#90E57E";
    boxDiv.style.width = "30rem";
    boxDiv.style.padding = "5rem 0rem";
    document.querySelector("main").style.backgroundColor = "#77B868";
    document.querySelector("footer").style.backgroundColor = "#659E57";
    document.querySelector(".restart-btn").style.backgroundColor = "#659E57";
    checkBtn.style.backgroundColor = "#659E57";
    checkBtn.style.display = "none";
    document.querySelector("input[type='text']").style.color = "#000";
    alert("Congratulations :), press the 'Restart' button to replay the game.")
}

function attemptsFinish(){
    alert("You have used all your attempts left, please press 'Restart' button!");
    checkBtn.style.display = "none";
    header.style.backgroundColor = "#7C162E";
    header.style.borderBottom = "0";
    boxDiv.style.backgroundColor = "#9C162E";
    boxDiv.style.width = "30rem";
    boxDiv.style.padding = "5rem 0rem";
    boxDiv.textContent = "X";
    boxDiv.style.fontSize = "12rem";
    document.querySelector("main").style.backgroundColor = "#5C162E";
    document.querySelector("footer").style.backgroundColor = "#3C162F";
    restartBtn.style.backgroundColor = "#3C162F";
    restartBtn.style.padding = "1.5rem 3rem";
    restartBtn.style.fontSize = "1.6rem";
    checkBtn.style.display = "none";
    document.querySelector("input[type='text']").style.color = "#000";
}

function reloadPage(){
    window.location.reload();
}
