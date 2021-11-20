lettersContainer = document.querySelector('.lettersContainer');

let timer = document.createElement('div');
timer.classList.add('timer');
lettersContainer.appendChild(timer);


function calculateTimer(wordsByLetter) {
    let timer = 0;
    let timerCount = {
        2: 1,
        3: 3,
        4: 7,
        5: 10,
        6: 10,
        7: 10,
    }
    let counter = 1;
    wordsByLetter.forEach((words) => {
        console.log(words)
        counter++;
        timer += timerCount[counter] * words.length;
    })
    return timer;
}

let timeCount = calculateTimer(wordsByLetter);

const reduceTimeCount = () => {
    timeCount--;
    timer.textContent = `${timeCount}`;
    if (timeCount === 0 || timeCount < 0) {

    }
}
setInterval(reduceTimeCount, 1000);
