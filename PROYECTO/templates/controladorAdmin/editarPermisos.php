<?php
//Leer los datos y visualizar los valores en las casillas
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $consulta = "SELECT * FROM tipousuario WHERE idTipo = ?";
    if ($stmt = $conn->prepare($consulta)) {
        $stmt->bind_param('i', $_GET['id']);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $idpermiso = $row['idTipo'];
                $permiso = $row['tipo'];
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
    header("location: ../configuraciones.php");
    exit();
}




//Tomar los datos editador y actualizarlos en la base
//Verificar si los canpos son enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Verificar si los datos de las variables estan enviadas
    if (
        isset($_POST['idPermiso']) && isset($_POST['permiso'])
    ) {
        //Contruir la consulta
        $consulta = "UPDATE tipousuario SET idTipo=?, tipo=? WHERE idTipo=?";
        //Prepra la consulta para ejecutarla
        if ($stmt = $conn->prepare($consulta)) {
            $stmt->bind_param(
                'isi',
                $_POST['idPermiso'],
                $_POST['permiso'],
                $_GET['id']
            );
            //Ejecutar statement
            if ($stmt->execute()) {
                header('location: configuraciones.php');
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

?>