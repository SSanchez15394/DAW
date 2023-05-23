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
    <form action="./new-user.php" method="post" id="form">
        <div>
            <label>
                Correo Electrónico:
                <input type="email" name="newEmail" id="newEmail" placeholder="Correo Electrónico" required>
            </label>
        </div>
        </p>
        <div>
            <label>
                Constraseña:
                <input type="password" name="newPassword" id="newPassword" placeholder="Contraseña" required>
            </label>
        </div>
        </p>
        <div>
            <label>
                Confirmar Constraseña:
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirma tu Contraseña" require>
            </label>
        </div>
        </p>
        <div classf="button">
            <button type="submit">REGISTRO</button>
        </div>
        </p>
    </form>
    <?php
    // NUEVO REGISTRO
    try {
        if (!empty($_POST["newEmail"]) && !empty($_POST["newPassword"])) {
            session_start();
            include("./connect.php");

            // ENCRIPTAR Y VERIFICAR
            $newEmail = $_POST["newEmail"];
            $newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
            //INSERTAR NUEVOS DATOS
            $query = $dsn->prepare("INSERT INTO alumnos(email,contrasenia) VALUES('$newEmail', '$newPassword')");
            if (password_verify($_POST['confirmPassword'], $newPassword)) {
                $query->execute();
                header("location:./registro.php");
            } else {
                echo '<h4>La contraseña no coincide. Por favor revise los campos.</h4>';
            };
        }
    } catch (PDOException $e) {
        echo "Error: $e";
    }
    ?>
    <nav>
        <a href="./registro.php">Acceso: Ya estoy registrado en el sistema</a>
    </nav>


</body>

</html>