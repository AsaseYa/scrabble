//Import php var
const randomLetters = JSON.parse(document.querySelector('#phpVarLetters').textContent);

//var for DOM manipulation
let bigTilesContainer = document.querySelector('.big-tiles-container');

randomLetters.map((e) => {
    let letter = document.createElement('div');
    letter.classList.add('big-tiles');
    letter.innerHTML = "<span>" + e + "</span>";
    bigTilesContainer.appendChild(letter);
})