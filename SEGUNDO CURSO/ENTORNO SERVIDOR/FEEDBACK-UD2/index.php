<!-- Dada la siguiente frase: “PHP es el lenguaje de programación de entorno servidor” 
realizar un programa que resuelva los siguientes apartados:
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback UD2 - DES </title>
</head>

<body>
    <?php

    $sentence = "PHP es el lenguaje de programación de entorno servidor.";
    $br = "<br><br>"; // He puesto muchos <br> para poder separar mejor las respuestas de cada apartado.

    // a) Indicar la posición de la palabra “programación”.
    echo "Indica la posición de la palabra 'programación' en la siguiente frase: ${sentence} <br>";
    echo "La palabra 'programación' se encuentra en la posición número " . strrpos($sentence, "programación") . " de la frase." . $br;
    /* ESTE EJERCICIO PENSÉ EN REALIZARLO CONVIRTIENDO EN STRING EN UN ARRAY E INDICANDO SU POSICIÓN MEDIANTE SU ÍNDICE.
    PERO COMO EN ESTA UNIDAD TODAVÍA NO HEMOS DADO LOS ARRAYS... 
    */

    // b) Reemplazar “entorno servidor” por “DES” y presentar la nueva frase en la página web.
    $new_Word = "DES";
    echo "Frase antigua: ${sentence}";
    $newString = str_replace("entorno servidor", $new_Word, $sentence);
    echo "Nueva frase: ${newString} ${br}";


    // c) Indicar si existe (SI EXISTE) o no existe (NO EXISTE) la palabra “PHP” en la frase anterior.
    $word = "PHP";
    if (strpos($sentence, $word) !== false) {
        echo "La palabra ${word}: 'SI EXISTE' en la frase anterior.${br}";
    } else {
        echo "La palabra ${$word}: 'NO EXISTE' en la frase anterior.${br}";
    }

    // d) Indicar cuantas letras “a” hay en la frase inicial del enunciado.
    echo "La letra 'a' se repite: " . substr_count($sentence, "a") . " veces.";

    ?>
</body>

</html>