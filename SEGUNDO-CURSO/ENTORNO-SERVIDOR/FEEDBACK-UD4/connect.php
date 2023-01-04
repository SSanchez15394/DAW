<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Feedback UD4 - DES</title>
</head>

<body>
    <?php
    // CREAMOS VARIABLES Y CONECTAMOS CON LA BASE DE DATOS 
    $db_connection = "mysql:host=localhost; dbname=alumnospdo";
    $username = "root";
    $password = "";

    try {
        $dsn = new PDO($db_connection, $username, $password);
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // BUSCAMOS EL NOMBRE QUE QUEREMOS MODIFICAR (SELECT)
        $name = $_POST['name'];
        $sql = ("SELECT * FROM alumnos WHERE nombre = '${name}'");
        $query = $dsn->prepare($sql);
        $query->execute();

        if (!$query = $sql) {
            echo "<h3>No se han encontrado nombres que coincidan en la base de datos.</h3>";
        } else {
            echo "<h3>Nombre anterior: <br> ${name}</h3></p>";
        }

        // INTRODUCIMOS EL NUEVO NOMBRE QUE DESEAMOS (UPDATE)
        $name = $_POST["name"];
        $new = $_POST["newName"];
        $sql = ("UPDATE alumnos SET nombre = '$new' WHERE nombre = '${name}'");
        $query = $dsn->prepare($sql);
        $query->execute();
        if ($query == false) {
            echo "<h3>Los cambios no han podido realizarse correctamente.</h3>";
        } else {
            echo "<h3>Nuevo nombre a partir de ahora:<br> ${new}</h3>";
        }
    } catch (PDOException $e) {
        echo ("Fallo la conexión. ERROR: " . $e->getMessage());
    }
    ?>
</body>