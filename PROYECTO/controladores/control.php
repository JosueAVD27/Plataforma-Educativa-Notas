<?php

if ($_SESSION['permisos'] == 1) {
    //Obtener
    if (isset($_SESSION['id']) && !empty(trim($_SESSION['id']))) {
        $id = $_SESSION['id'];
        $consulta = "SELECT M.*, U.idUsuario AS IdEstudiante, U2.nombreUsuario AS NombreDocente, U2.apellidoUsuario AS ApellidoDocente
        FROM notas AS N
        INNER JOIN materia AS M ON N.idMateria = M.idMateria
        INNER JOIN usuarios AS U ON N.idUsuario = U.idUsuario
        INNER JOIN usuarios AS U2 ON M.idUsuario = U2.idUsuario
        WHERE U.idUsuario = $id AND M.idEstado = 1";

        $resultado = $conn -> query($consulta);

    } else {
        echo 'Error! Intente mas tarde';
        exit();
    }
}else if($_SESSION['permisos'] == 2){
    //Obtener
    if (isset($_SESSION['id']) && !empty(trim($_SESSION['id']))) {
        $id = $_SESSION['id'];
        $consulta = "SELECT * FROM materia WHERE idUsuario = $id AND idEstado = 1";

        $resultado = $conn -> query($consulta);

    } else {
        echo 'Error! Intente mas tarde';
        exit();
    }
}else if($_SESSION['permisos'] == 3){
    
}
