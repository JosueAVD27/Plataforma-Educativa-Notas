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

//Consulta para obtener todos los docentes
$consultaM2 = "SELECT idUsuario, nombreUsuario, apellidoUsuario FROM usuarios WHERE idTipo = 2 AND idEstado = 1";
$resultadoM2 = $conn -> query($consultaM2);


//Tomar los datos editador y actualizarlos en la base
//Verificar si los canpos son enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Verificar si los datos de las variables estan enviadas
    if (
        isset($_POST['nrc']) && isset($_POST['materia']) && isset($_POST['docente'])
    ) {
        //Contruir la consulta
        $consultaM3 = "UPDATE materia SET nrc=?, nombreMateria=?, idUsuario=? WHERE idMateria=?";
        //Prepra la consulta para ejecutarla
        if ($stmt = $conn->prepare($consultaM3)) {
            $stmt->bind_param(
                'isii',
                $_POST['nrc'],
                $_POST['materia'],
                $_POST['docente'],
                $_GET['id']
            );
            //Ejecutar statement
            if ($stmt->execute()) {
                header('location: materias.php');
                exit();
            } else {
                echo "Error! el estatement no ejecuto";
            }
            $stmt->close();
        } else {
            echo "Erorr en la ejecusion del statement";
        }
    } else {
        echo "No se estan llenando todos los datos";
    }
    $conn->close();
}