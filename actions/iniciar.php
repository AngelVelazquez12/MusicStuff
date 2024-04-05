<?php

session_start();
require_once '../db_conection.php';

if (isset($_POST['enviarSesion'])) {
    $sql = 'SELECT * FROM datos WHERE email = :email and clave = :clave';
    $query = $cnnPDO->prepare($sql);
    $query->bindParam(":email", $_POST['emailSesion']);
    $query->bindParam(":clave", $_POST['claveSesion']);
    $query->execute();
    
    $count = $query->rowCount();
    $campo = $query->fetch();

    if ($count) {
        $_SESSION['email'] = $campo['email'];
        $_SESSION['nombre'] = $campo['nombre'];
        $_SESSION['ciudad'] = $campo['ciudad'];
        $_SESSION['clave'] = $campo['clave'];
        $_SESSION['rfc'] = $campo['rfc'];
        $_SESSION['direccion'] = $campo['direccion'];
        $_SESSION['estado'] = $campo['estatus'];
        
        unset($query);
        unset($cnnPDO);
        header("Location: ../Sesion.php");
    } else {
        unset($query);
        unset($cnnPDO);
        header("Location: ../index.php");
    }
}

?>