<?php
//Leer los datos y visualizar los valores en las casillas
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $consulta = "SELECT M.*, U.nombreUsuario, U.apellidoUsuario FROM materia AS M
    INNER JOIN usuarios AS U ON M.idUsuario = U.idUsuario
    WHERE M.idMateria=?";
    if ($stmt = $conn->prepare($consulta)) {
        $stmt->bind_param('i', $_GET['id']);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $nrc = $row['nrc'];
                $nombre = $row['nombreMateria'];
                $usuario = $row['idUsuario'];
                $nombreDocente = $row['nombreUsuario'];
                $apellidoDocente = $row['apellidoUsuario'];
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