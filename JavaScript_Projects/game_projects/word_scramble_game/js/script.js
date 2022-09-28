const wordText = document.getElementById('word'),
hintText = document.querySelector('.hint span'),
input = document.getElementById('input'),
timeText = document.querySelector('.time b'),
refleshBtn = document.getElementById('reflesh-btn'),
checkBtn = document.getElementById('check-btn');

let correctWord, timer;

const initTimer = maxTime => {
    clearInterval(timer);
    timer = setInterval(() => {
        if(maxTime > 0){
            maxTime--; //decrement maxTime by -1
            return timeText.innerHTML = maxTime;
        }
        clearInterval(timer);
        alert(`Time off! ${correctWord.toUpperCase()} was the correct word`);
        initGame();
    }, 1000);
}

const initGame = () => {
    initTimer(30);
    let randomObj = words[Math.floor(Math.random() * words.length)]; //getting random object from words
    let wordArray = randomObj.word.split(''); //splitting each letter of random word
    console.log(wordArray);
    console.log(randomObj);
    for(let i = wordArray.length - 1; i > 0; i--){
        let x = Math.floor(Math.random() * (i + 1)); //getting random number
        //shuffling and swiping wordArray letters randomly
        [wordArray[i], wordArray[x]] = [wordArray[x], wordArray[i]];
    }
    wordText.innerHTML = wordArray.join(''); //passing shuffled word as word text
    hintText.innerHTML = randomObj.hint; //passing random object hint as hint text
    correctWord = randomObj.word; //passing random word to correctWord
    console.log(hintText);
    input.setAttribute('maxlength', correctWord.length); //setting input maxlength attr value to word length
    input.value = '';
}

initGame();
const checkWord = () => {
    let userWord = input.value; //getting input value
    if(!userWord) return alert('Please enter a word');
    if(userWord !== correctWord)return alert(`Oops! ${userWord} is not a correct word`);
    alert(`Congrats! ${correctWord.toUpperCase()} is a correct word :)`);
    initGame();
}

refleshBtn.addEventListener('click', initGame);

checkBtn.addEventListener('click', checkWord);