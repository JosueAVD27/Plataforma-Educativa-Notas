<?php
//Leer los datos y visualizar los valores en las casillas
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $consulta = "SELECT * FROM materia WHERE idMateria = ?";
    if ($stmt = $conn->prepare($consulta)) {
        $stmt->bind_param('i', $_GET['id']);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $nrc = $row['nrc'];
                $nombre = $row['nombreMateria'];
                $docente = $row['idUsuario'];
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
} else {
    header("location: ../materias.php");
    exit();
}