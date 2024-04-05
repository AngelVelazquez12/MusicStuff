<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="plugins/toastr.min.js"></script>
    <link rel="stylesheet" href="plugins/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="plugins/toastr.js"></script>


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Music nd Stuff</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PagRegistro.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="PagIniciar.php">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light p-4">
                    <h2>Inicia Sesion :)</h2>
                    <form action="actions/iniciar.php" method="POST" id="contact-form">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input name="emailSesion" type="text" class="form-control" id="emailSesion" placeholder="Escribe tu email">
                        </div>
                        <div class="form-group">
                            <label for="contrasena">Clave:</label>
                            <input name="claveSesion" type="password" class="form-control" id="claveSesion" placeholder="Escribe tu contraseña">
                        </div>
                        <button name="enviarSesion" type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


<script>
    $(document).ready(function() {
    $("#contact-form").submit(function(event) {
        var hayErrores = false;

        toastr.clear();

        var email = $("#emailSesion").val();
        
        var claveSesion = $("#claveSesion").val();
       
        var formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        if (emailSesion === "" || !formatoemail.test(email)) {
            toastr.error("Correo incorrecto");
            hayErrores = true; 
        }

        if (claveSesion === "") {
            toastr.error("La clave se te olvido ponerla");
            hayErrores = true; 
        }

        if (hayErrores) {
            event.preventDefault(); 
        }
    });
});
    </script>

</body>
</html>


