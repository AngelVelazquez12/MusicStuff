<?php

session_start();
if ((empty($_SESSION['nombre'])) or ($_SESSION['estado'] == "Desactivado")) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="plugins/toastr.min.js"></script>
    <link rel="stylesheet" href="plugins/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="plugins/toastr.js"></script>
    <link rel="stylesheet" href="styleprueba.css">
    <link rel="icon" type="image/png" href="https://static.vecteezy.com/system/resources/previews/000/421/044/non_2x/music-note-icon-vector-illustration.jpg">
  <title>Inicio Music</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Music nd Stuff :)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="SesionDatos.php">Actualizar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SesionMostrar.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actions/cerrarSesion.php">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
  

  
    <div class="container">
    <div class="row mt-4">
      <div class="col-md-2">
        <div class="card">
          <img src="InstrumentsImgs/G1.jpg" class="card-img-top" alt="Imagen 1">
          <div class="card-body">
            <h5 class="card-title">Articulo 1</h5>
            <p class="card-text">Descripción de la imagen 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="InstrumentsImgs/G2.jpg" class="card-img-top" alt="Imagen 2">
          <div class="card-body">
            <h5 class="card-title">Articulo 2</h5>
            <p class="card-text">Descripción de la imagen 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="InstrumentsImgs/G3.jpg" class="card-img-top" alt="Imagen 3">
          <div class="card-body">
            <h5 class="card-title">Articulo 3</h5>
            <p class="card-text">Descripción de la imagen 3.</p>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="InstrumentsImgs/G4.jpg" class="card-img-top" alt="Imagen 3">
          <div class="card-body">
            <h5 class="card-title">Articulo 4</h5>
            <p class="card-text">Descripción de la imagen 4.</p>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="InstrumentsImgs/G5.jpg" class="card-img-top" alt="Imagen 3">
          <div class="card-body">
            <h5 class="card-title">Articulo 5</h5>
            <p class="card-text">Descripción de la imagen 5.</p>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <img src="InstrumentsImgs/G2.jpg" class="card-img-top" alt="Imagen 3">
          <div class="card-body">
            <h5 class="card-title">Articulo 6</h5>
            <p class="card-text">Descripción de la imagen 6.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  

</body>
</html>