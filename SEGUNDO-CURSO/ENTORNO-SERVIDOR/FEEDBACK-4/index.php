<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Feedback UD4 - DES</title>
</head>

<div class="row">
    <div class="cold-md-4">
        <div class="row">
            <h2 id="modify">MODIFICAR EL NOMBRE</h2>
            <form action="connect.php" method="POST" class="form-control" target="_blank" autofocus autocomplete="on">
                <div>
                    <label for="name" class="form-label">Nombre del alumno a modificar:
                        <input type="text" name="name" id="name" class="form-control mt-1 mb-3" autofocus required>
                        <label for="newName" class="form-label">Introduzca el nuevo nombre del alumno:
                            <input type="text" name="newName" id="newName" class="form-control mt-1 mb-3" autofocus required>
                            <button type="submit" name="updateName" id="updateName" class="btn btn-primary float-right">Modificar</button>
                </div>
                </label>
            </form>
        </div>
    </div>
</div>
</body>

</html>