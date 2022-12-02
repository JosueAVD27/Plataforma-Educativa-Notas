<?php
//Leer los datos y visualizar los valores en las casillas
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $consulta = "SELECT * FROM notas WHERE idNotas=?";
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
} else {
    header("location: ../materias.php");
    exit();
}


//Tomar los datos editador y actualizarlos en la base
//Verificar si los canpos son enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Verificar si los datos de las variables estan enviadas
    if (
        isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])
    ) {
        //Contruir la consulta
        $consultaM3 = "UPDATE notas SET nota1=?, nota2=?, nota3=? WHERE idNotas=?";
        //Prepra la consulta para ejecutarla
        if ($stmt = $conn->prepare($consultaM3)) {
            $stmt->bind_param(
                'dddi',
                $_POST['nota1'],
                $_POST['nota2'],
                $_POST['nota3'],
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