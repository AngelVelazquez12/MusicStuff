<?php

    const host = "localhost";
    const database = "datos";
    const user = "root";
    const password = "";

    try {
        $cnnPDO = new PDO("mysql:host=".host.";dbname=".database, user, password);
    } catch (PDOException $e) {
        echo $e;
    }

?>