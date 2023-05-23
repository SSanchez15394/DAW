<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Feedback 5 - DES</title>

</head>

<body>
    <form action="./registro.php" method="post" autocomplete="on">
        <div>
            <label for="txt1">Correo Electrónico:
                <input type="email" name="email" id="email" placeholder="Escribe tú correo electrónico" style="min-width:180px" required>
            </label>
        </div>
        </p>
        <div>
            <label for="txt1">Contraseña
                <input type="password" name="password" id="password" placeholder="Constraseña" required>
            </label>
        </div>
        </p>
        <div>
            <button type="submit" id="submit">Iniciar sesión</button>
        </div>
        </p>
    </form>
    </p>
    <nav>
        <a href="./new-user.php">No estoy registrado. Ir al registro</a>
    </nav>
    <?php
    if (!empty($_POST['email'])) {
        if (empty($_POST['email'])) {
            echo "rellena los campos";
        } else {
            session_start();
            include('./connect.php');

            $email = $_POST["email"];
            $contrasenia = $_POST["password"];

            // Buscamos el usuario y contraseña en nuestra BBDD
            $sql = ("SELECT * FROM usuarios WHERE email = '$email'");
            $query = $dsn->prepare($sql);
            $data = $query->fetchObject();

            $query->execute();

            $numRow = $query->rowCount();
            $buscarPass = $query->fetchObject();
            // Verificamos que la contraseña introducida coincida con la encriptada en la BBDD
            $verificar = password_verify($contrasenia, $buscarPass->contrasenia);

            // Verificamos que la contraseña introducida y la encriptada en la BBDD son la misma y damos acceso si coinciden 
            if (($numRow == 1) && ($verificar == true)) {
                header('location:./welcome.php');
            } else {
                echo "<h4>ACCESO DENEGADO</h4>";
            }
        }   
    }
    ?>
</body>

</html>