/**
 * Nueva forma
 */
window.onload = function () {
    createTableData();
};

/**
 * Método 2
 */
function createTableData() {
    document.getElementById("title").innerHTML = 'Hola sanchez';

    let row = 1;
    for (let index = 1; index <= 15; index++) {
        if (index === 6 || index === 11) {
            row++
        }

        let tr = document.createElement("tr");
        tr.id = "row_" + row;
        document.getElementById("my_table").appendChild(tr);

        let td = document.createElement("td");
        td.id = "data_" + index
        let image = document.createElement("img");
        image.className = "img" + index;
        image.src = "./assets/images/imagen" + index + ".jpg";
        image.style.width = "300px";
        image.style.height = "300px";
        image.style.visibility = "visible";
        image.style.objectFit = "cover";
        image.alt = "imagen" + index;

        document.getElementById("row_" + row).appendChild(td)
        document.getElementById("data_" + index).appendChild(image);
    }
}

function showOdd() {
    document.getElementById("title").innerHTML = 'Impares =D';

    for (let index = 1; index <= 15; index++) {
        let rest = index % 2

        if (parseInt(rest) == 0) {
            document.querySelector(".img" + index).style.visibility = "hidden";
            continue
        }
        document.querySelector(".img" + index).style.visibility = "visible";
    }
}

function showPairs() {
    document.getElementById("title").innerHTML = 'Pares =D';

    for (let index = 1; index <= 15; index++) {
        let rest = index % 2

        if (parseInt(rest) == 1) {
            document.querySelector(".img" + index).style.visibility = "hidden";
            continue
        }
        document.querySelector(".img" + index).style.visibility = "visible";
    }
}

function allPictures() {
    document.getElementById("title").innerHTML = 'Todas las imágenes';

    for (let index = 1; index <= 15; index++) {
        document.querySelector(".img" + index).style.visibility = "visible";
    }
}