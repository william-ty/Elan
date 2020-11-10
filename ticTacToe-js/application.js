const cellElements = document.querySelectorAll('[data-cell]')

cellElements.forEach(cell => {
    cell.addEventListener("click", handleClick, {
        once: true
    })
})

function handleClick(e) {
    // placeMark
    // Check For Win
    // Check For Draw
    // Switch Turns
}