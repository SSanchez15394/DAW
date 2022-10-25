// Muestra las imágenes pares
function showOdd() {
    for (let index = 1; index <= 15; index++) {
        let rest = index % 2

        if (parseInt(rest) == 0) {
            document.querySelector(`.img${index}`).style.visibility = "hidden";
            continue
        }
        document.querySelector(`.img${index}`).style.visibility = "visible";
    }
}
// Muestra las imágenes pares
function showPairs() {
    for (let index = 1; index <= 15; index++) {
        let rest = index % 2

        if (parseInt(rest) == 1) {
            document.querySelector(`.img${index}`).style.visibility = "hidden";
            continue
        }
        document.querySelector(`.img${index}`).style.visibility = "visible";
    }
}
// Muestra todas las imágenes 
function allPictures() {
    for (let index = 1; index <= 15; index++) {
        document.querySelector(`.img${index}`).style.visibility = "visible";
    }
}
