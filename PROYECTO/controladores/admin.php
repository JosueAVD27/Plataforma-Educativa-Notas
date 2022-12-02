<?php
    if ($_SESSION['permisos'] != 3) {
        header("location: inicio.php");
    }

    //tipo de usuarios
    $consulta = "SELECT * FROM tipousuario";
    $resultado = $conn -> query($consulta);

    //estados
    $consulta2 = "SELECT * FROM estados";
    $resultado2 = $conn -> query($consulta2);

    //materias
    $consulta3 = "SELECT materia.*, U.nombreUsuario, U.apellidoUsuario, E.estado FROM materia
                    INNER JOIN usuarios AS U ON materia.idUsuario = U.idUsuario
                    INNER JOIN estados AS E ON materia.idEstado = E.idEstado";
    $resultado3 = $conn -> query($consulta3);

    //usuarios
    $consulta4 = "SELECT U.*, T.tipo, E.estado FROM usuarios AS U
    INNER JOIN estados AS E ON U.idEstado = E.idEstado
    INNER JOIN tipousuario AS T ON U.idTipo = T.idTipo
    ORDER BY idUsuario ASC";
    $resultado4 = $conn -> query($consulta4);

    
?>