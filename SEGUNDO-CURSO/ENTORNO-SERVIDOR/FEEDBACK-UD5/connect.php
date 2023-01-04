<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Feedback 5 - DES</title>
</head>

<body>
    <?php
    // CREAMOS VARIABLES Y CONECTAMOS CON LA BBDD 
    $db_connection = "mysql:host=localhost; dbname=alumnospdo";
    $username = "root";
    $password = "root";

    try {
        $dsn = new PDO($db_connection, $username, $password);
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo ("Fallo la conexión. ERROR: " . $e->getMessage());
    }
    ?>
</body>