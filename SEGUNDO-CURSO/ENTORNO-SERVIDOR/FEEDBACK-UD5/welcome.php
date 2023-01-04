<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <?php include "./connect.php" ?>
    <style>
        body {
            padding: auto;
            margin: 40px auto;
            font-family: 'Roboto', sans-serif;
            text-align: center;
            background-size: 100% 400%;
            text-shadow: 1px 1px 1px black;
        }
    </style>
    <title>Feedback 5 - DES</title>
</head>

<body>
    <!-- Damos la bienvenida al usuario y le ofrecemos también la posibilidad de cerrar la sesión actual -->
    <div>
        <h4>!!! SESIÓN INICIADA CORRECTAMENTE - ADELANTE !!!</h4>
        </p>
        <img src="./assets/img/session-ok.jpeg" alt="session-ok"></p>
        <a href="./exit.php" id="exit">Cerrar sesión</a>
    </div>
</body>

</html>