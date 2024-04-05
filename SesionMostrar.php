<?php

session_start();
if ((empty($_SESSION['nombre'])) or ($_SESSION['estado'] == "Desactivado")) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/c1.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Sesion.php">Regresar al Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="SesionDatos.php">Actualizar Mis Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actions/cerrarSesion.php">Cerrar Sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actions/desactivar.php">Desactivar Cuenta</a>
                </li>
            </ul>
        </div>
    </nav>

      <main class="container">
        <h2 class="text-center mt-4">Mostrar mis datos</h2>
        <form action="actions/actualizar.php" method="post" class="d-flex flex-column gap-4 form-group w-50 mt-5 mx-auto border p-3">
            <div class="inputs">
                <label class="form-label" for="email">Email</label>
                <input readonly class="form-control" type="email" value="<?php echo $_SESSION['email']?>" id="email" name="email">
            </div>

            <div class="inputs">
                <label class="form-label" for="nombre">Nombre</label>
                <input readonly class="form-control" type="text" value="<?php echo $_SESSION['nombre']?>" id="nombre" name="nombre">
            </div>

            <div class="inputs">
                <label class="form-label" for="ciudad">Nombre</label>
                <input readonly class="form-control" type="text" value="<?php echo $_SESSION['ciudad']?>" id="ciudad" name="ciudad">
            </div>

            <div class="inputs">
                <label class="form-label" for="clave">Clave</label>
                <input readonly class="form-control" type="password" value="<?php echo $_SESSION['clave']?>" id="clave" name="clave">
            </div>
            
            <div class="inputs">
                <label class="form-label" for="ciudad">RFC</label>
                <input readonly class="form-control" type="text" value="<?php echo $_SESSION['rfc']?>" id="rfc" name="rfc">
            </div>
            
            <div class="inputs">
                <label class="form-label" for="ciudad">Direccion</label>
                <input readonly class="form-control" type="text" value="<?php echo $_SESSION['direccion']?>" id="direccion" name="direccion">
            </div>

            
            
        </form>
    </main>
</body>
</html>