<?php

    require_once "db_conection.php";

    if (isset($_POST['enviar'])) {
        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['clave']) && !empty($_POST['ciudad'])) {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $clave = $_POST['clave'];
            $ciudad = $_POST['ciudad'];
            $estado = "activado";
            

            $sql = $cnnPDO->prepare(
                "INSERT INTO datos (nombre, clave, ciudad, email, estatus) VALUES (:nombre, :clave, :ciudad, :email, :estatus);"
            );

            $sql->bindParam(":nombre", $nombre);
            $sql->bindParam(":clave", $clave);
            $sql->bindParam(":ciudad", $ciudad);
            $sql->bindParam(":email", $email);
            $sql->bindParam(":estatus", $estado);
            

            $sql->execute();
            unset($sql);
            unset($cnnPDO);

            $emailcontacto = $_POST['email'];
            $asunto = "¡Haz Registrado!";
            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $cabeceras .= 'From: ' . $_POST['email'] . '\r\n';
    
            $mensaje = 'Nombre  : ' . $_POST['nombre'] . '<br>' .
                       'Email   : ' . $emailcontacto . '<br>' .
                       'Ciudad : ' . $_POST['ciudad'] . '<br>' .
                       'Contraseña  : ' . $_POST['clave'] . '<br>' .
                        '<br>';
    
            // Utilizamos la funcion mail de php para enviar el correo
            mail($emailcontacto, $asunto, $mensaje, $cabeceras);
    
            header("Location: ../PagIniciar.php");
        }
    }

?>