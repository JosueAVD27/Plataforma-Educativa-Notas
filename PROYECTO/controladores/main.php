<?php
    SESSION_START();
    //Validar si se ingresa sin login
    if (!$_SESSION) {
        header("location: ../login/");
    }

    //Conexion a la base de datos
    include("../conexion/conexion.php");
    $conn=conectar();
?>