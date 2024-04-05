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
                    <a class="nav-link active" href="PagRegistro.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PagIniciar.php">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light p-4">
                    <h2>Registrate :)</h2>
                    <form action="actions/registrar.php" method="POST" id="contact-form">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Escribe tu email">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad:</label>
                            <select class="form-control" name="ciudad" id="ciudad">
                                <option value="" selected>Selecciona una ciudad</option>
                                <option value="Saltillo">Saltillo</option>
                                <option value="Monterrey">Monterrey</option>
                                <option value="CDMX">CDMX</option>
                                <option value="Tampico">Tampico</option>
                                <option value="Vallarta">Vallarta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contrasena">Clave:</label>
                            <input name="clave" type="password" class="form-control" id="contrasena" placeholder="Escribe tu contraseña">
                        </div>
                        <div class="form-group">
                            <label for="username">Confirmar Clave:</label>
                            <input type="password" class="form-control" id="confirmar" placeholder="Confirma tu contraseña">
                        </div>
                        <button name="enviar" type="submit" class="btn btn-primary">Enviar</button>
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

        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var ciudad = $("#ciudad").val();
        var contrasena = $("#contrasena").val();
        var confirmar = $("#confirmar").val();

        

        var formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        if (email === "" || !formatoemail.test(email)) {
            toastr.error("Correo incorrecto");
            hayErrores = true; 
        }

        else if (nombre === "") {
            toastr.error("Pon tu nombre pls");
            hayErrores = true; 
        }

        else if (ciudad === "") {
            toastr.error("Oyeee la ciudad te falta");
            hayErrores = true; 
        }

        else if (contrasena === "") {
            toastr.error("La clave se te olvido ponerla");
            hayErrores = true; 
        }

        else if (confirmar !== contrasena) {
            toastr.error("Las claves no coinciden");
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


