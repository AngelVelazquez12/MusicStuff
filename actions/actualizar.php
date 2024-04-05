<?php

require_once '../db_conection.php';
session_start();

if (isset($_POST['enviar'])) {
    $sql = 'UPDATE datos SET rfc = :rfc, direccion = :direccion WHERE email = :correo AND clave = :clave';
    $query = $cnnPDO->prepare($sql);
    $query->bindParam(":rfc", $_POST['rfc']);
    $query->bindParam(":direccion", $_POST['direccion']);
    $query->bindParam(":clave", $_POST['clave']);
    $query->bindParam(":correo", $_POST['email']);
    $query->execute();
    
    unset($query);
    unset($cnnPDO);
    header("Location: ../SesionMostrar.php");
    
}

?>