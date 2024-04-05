<?php

require_once '../db_conection.php';
session_start();

$clave = $_SESSION['clave'];
$email = $_SESSION['email'];
$estatus = 'Desactivado';

$sql = "UPDATE datos SET estatus = :estatus WHERE email = :email and clave = :clave";
$query = $cnnPDO->prepare($sql);
$query->bindParam(":estatus", $estatus);
$query->bindParam("email", $email);
$query->bindParam("clave", $clave);
$query->execute();

unset($query);
unset($cnnPDO);

session_destroy();
header("Location: ../index.php");

?>