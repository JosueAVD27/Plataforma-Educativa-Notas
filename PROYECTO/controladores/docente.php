<?php
    if ($_SESSION['permisos'] != 2) {
        header("location: inicio.php");
    }

    $id = $_GET['id'];

    $consultax = "SELECT * FROM materia WHERE idMateria = ?";
    if ($stmt = $conn->prepare($consultax)) {
        $stmt->bind_param('i', $_GET['id']);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $materia = $row['nombreMateria'];

            } else {
                echo 'No exiten resultados';
                exit();
            }
        } else {
            echo 'No ejecuto la consulta';
            exit();
        }
    }
    $stmt->close();

    //usuario y notas
    $consulta = "SELECT N.*, U.nombreUsuario, U.apellidoUsuario, U.correoUsuario FROM notas AS N
    INNER JOIN usuarios AS U ON N.idUsuario = U.idUsuario WHERE idMateria=$id";
    $resultado = $conn -> query($consulta);

?>