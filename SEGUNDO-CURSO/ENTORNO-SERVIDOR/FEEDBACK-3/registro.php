<?php
if (
    !empty($_POST["name"])
    && !empty($_POST["lastname"])
    && !empty($_POST["tel"])
    && !empty($_POST["date"])
    && !empty($_POST["mail"])
    && !empty($_POST["address"])
) {
    echo "<h1>Los datos introducidos para el registro son:</h1>
        NOMBRE COMPLETO: {$_POST["name"]} {$_POST["lastname"]}<br>
        TELÉFONO: {$_POST["tel"]}<br>
        FECHA DE NACIMIENTO: {$_POST["date"]}<br> 
        EMAIL: {$_POST["mail"]}<br> 
        DIRECCIÓN: {$_POST["address"]}";
} else {
    echo "value=''";
}

