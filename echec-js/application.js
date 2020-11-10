//card options
const cardArray = {
    blank: "fas fa-viruses",
    pawn: 'fa fa-chess-pawn',
    bishop: 'fas fa-chess-bishop',
    knight: 'fas fa-chess-knight',
    rook: 'fas fa-chess-rook',
    queen: 'fas fa-chess-queen',
    king: 'fas fa-chess-king',
}


const chesColor = [{
        name: "black",
        img: "/assets/black-square.jpg"
    },
    {
        name: "white",
        img: "/assets/white-square-th.png"
    }
]
const chesGrid = [
    cardArray.rook,
    cardArray.knight,
    cardArray.bishop,
    cardArray.king,
    cardArray.queen,
    cardArray.bishop,
    cardArray.knight,
    cardArray.rook,
    cardArray.pawn,
    cardArray.pawn,
    cardArray.pawn,
    cardArray.pawn,
    cardArray.pawn,
    cardArray.pawn,
    cardArray.pawn,
    cardArray.pawn,
    cardArray.blank,
]
const grid = document.querySelector('.grid');

//create your board
function createBoard() {
    let toggle = 1
    for (let i = 0; i < 64; i++) {

        let div = document.createElement("div");
        let chessCase = document.createElement('img')
        let figure = document.createElement('figure')


        div.setAttribute('data-id', [i])
        div.appendChild(figure)
        grid.appendChild(div)

        chessCase.setAttribute('src', chesColor[toggle].img)
        if (![7, 15, 23, 31, 39, 47, 55].includes(i)) {

            toggle == 0 ? toggle++ : toggle--;
        }
        chessCase.className = "scare100";
        figure.appendChild(chessCase)
        //  Icons creation


    }
}

createBoard()

//   figure.appendChild(icon)

let array = document.querySelector(".grid")

for (let index = 0; index < 16; index++) {
    // Create icon Element
    let icon = document.createElement('i')
    // Add Class name for fontawesome
    icon.className = chesGrid[index]

    // Get the right div
    let currentDiv = document.querySelector(`[data-id="${index}"]`);
    currentDiv.children[0].appendChild(icon)
}

for (let index = 16; index < 16; index++) {
    // Create icon Element
    let icon = document.createElement('i')
    // Add Class name for fontawesome
    icon.className = chesGrid[index]

    // Get the right div
    let currentDiv = document.querySelector(`[data-id="${index}"]`);

    currentDiv.children[0].appendChild(icon)
}

for (let index = 16; index < (64 - 16); index++) {
    // Create icon Element
    let icon = document.createElement('i')
    // Add Class name for fontawesome
    icon.className = chesGrid[16]

    // Get the right div
    let currentDiv = document.querySelector(`[data-id="${index}"]`);

    currentDiv.children[0].appendChild(icon)
}

// Reverse Ches Array
let chesGridReverse = chesGrid.reverse()
// Remove first element ( Virus )
chesGridReverse.shift()
// Swap queen and king elt
[chesGridReverse[12], chesGridReverse[13]] = [chesGridReverse[13], chesGridReverse[0]];

console.table(chesGridReverse)

for (let index = 48; index < 64; index++) {

    // Create icon Element
    let icon = document.createElement('i')

    // Add Class name for fontawesome
    icon.className = chesGridReverse[(index - 48)] + " player2"
    // Get the right div
    let currentDiv = document.querySelector(`[data-id="${index}"]`);

    currentDiv.children[0].appendChild(icon)
}