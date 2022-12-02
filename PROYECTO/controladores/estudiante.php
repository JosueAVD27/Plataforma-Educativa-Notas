<?php
    if ($_SESSION['permisos'] != 1) {
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

    $iduser = $_SESSION['id'];

    $consulta = "SELECT * FROM notas WHERE idMateria=? AND idUsuario=$iduser";
    if ($stmt = $conn->prepare($consulta)) {
        $stmt->bind_param('i', $_GET['id']);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $nota1 = $row['nota1'];
                $nota2 = $row['nota2'];
                $nota3 = $row['nota3'];

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