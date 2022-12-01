<?php
    if ($_SESSION['permisos'] != 3) {
        header("location: inicio.php");
    }

    $consulta = "SELECT * FROM tipousuario";
    $resultado = $conn -> query($consulta);

    $consulta2 = "SELECT * FROM estados";
    $resultado2 = $conn -> query($consulta2);

    $consulta3 = "SELECT materia.*, U.nombreUsuario, U.apellidoUsuario, E.estado FROM materia
                    INNER JOIN usuarios AS U ON materia.idUsuario = U.idUsuario
                    INNER JOIN estados AS E ON materia.idEstado = E.idEstado";
    $resultado3 = $conn -> query($consulta3);
?>