function spain() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "listadoPaises.json", true);
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let result = JSON.parse(this.responseText);
            let dates = document.querySelector("#dates");

            for (let index of result.listadoPaises.pais) {
                if (index.nombre == "España") {
                    dates.innerHTML += `<tr><td>${index.nombre}</td><td>${index.ciudades}</td></tr>`;
                }
            }
        }
    }
    xhr.send();
}

function mexico() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "listadoPaises.json", true);
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let result = JSON.parse(this.responseText);
            let dates = document.querySelector("#dates");

            for (let index of result.listadoPaises.pais) {
                if (index.nombre == "México") {
                    dates.innerHTML += `<tr><td>${index.nombre}</td><td>${index.ciudades}</td></tr>`;
                }
            }
        }
    }
    xhr.send();
}

function italia() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "listadoPaises.json", true);
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let result = JSON.parse(this.responseText);
            let dates = document.querySelector("#dates");

            for (let index of result.listadoPaises.pais) {
                if (index.nombre == "Italia") {
                    dates.innerHTML += `<tr><td>${index.nombre}</td><td>${index.ciudades}</td></tr>`;
                }
            }
        }
    }
    xhr.send();
}

function brasil() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "listadoPaises.json", true);
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let result = JSON.parse(this.responseText);
            let dates = document.querySelector("#dates");

            for (let index of result.listadoPaises.pais) {
                if (index.nombre == "Brasil") {
                    dates.innerHTML += `<tr><td>${index.nombre}</td><td>${index.ciudades}</td></tr>`;
                }
            }
        }
    }
    xhr.send();
}