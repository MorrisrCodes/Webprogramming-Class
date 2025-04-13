let target;
let startGuesses = 10;
let guessesRemaining;
let timer;
let timerInterval;

const guess = document.getElementById("guess");
const guessButton = document.getElementById("submit");
const guessesLeft = document.getElementById("guesses");
const time = document.getElementById("time");
const result = document.getElementById("result");
const winAudio = document.getElementById("win");

function guessing() {
    target = Math.floor(Math.random() * 100) + 1;
    guessesRemaining = startGuesses;
    timer = 0;
    result.textContent = "";
    guess.value = "";

    updateGuessesLeft();
    updateClock();

    clearInterval(timerInterval);
    timerInterval = setInterval(updateClock, 1000);
}

function updateGuessesLeft() {
    guessesLeft.textContent = `Guesses Left: ${guessesRemaining}`;
}

function updateClock() {
    const mins = String(Math.floor(timer / 60)).padStart(2, "0");
    const secs = String(timer % 60).padStart(2, "0");
    time.textContent = `Time: ${mins}:${secs}`;
    timer++;
}

function handleGuess() {
    const curr = Number(guess.value);
    guess.value = "";

    guessesRemaining--;
    updateGuessesLeft();

    if (curr === target) {
        result.textContent = `Correct!.`;
        winAudio.play();
        guessButton.disabled = true;
        clearInterval(timerInterval);
        setTimeout(() => {
            guessButton.disabled = false;
            guessing();
        }, 2000);
    } else if (guessesRemaining === 0) {
        result.textContent = `You lost! The number was ${target}.`;
        clearInterval(timerInterval);
        guessButton.disabled = true;
        setTimeout(() => {
            guessButton.disabled = false;
            guessing();
        }, 2000);
    } else if (curr < target) {
        result.textContent = "Too low!";
    } else {
        result.textContent = "Too high!";
    }
}

guessButton.addEventListener("click", handleGuess);
guess.addEventListener("keyup", function (e) {
    if (e.key === "Enter") handleGuess();
});

guessing();
