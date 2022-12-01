<?php
    if ($_SESSION['permisos'] != 3) {
        header("location: inicio.php");
    }

    $consulta = "SELECT * FROM tipousuario";
    $resultado = $conn -> query($consulta);

    $consulta2 = "SELECT * FROM estados";
    $resultado2 = $conn -> query($consulta2);
?>