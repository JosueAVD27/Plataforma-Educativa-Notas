<?php
include("../../conexion/conexion.php");
$conn = conectar();

//Verificar si los datos de las variables estan enviadas
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $consulta = "SELECT idEstado FROM usuarios WHERE idUsuario=?";

    if($stmt = $conn -> prepare($consulta)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt -> execute()){
            $result = $stmt -> get_result();
            if($result -> num_rows == 1){
                $row = $result -> fetch_array(MYSQLI_ASSOC);
                $estado = $row['idEstado'];
            }else{
                echo 'No exiten resultados';
                exit();
            }
        }else{
            echo 'No ejecuto la consulta';
            exit();
        }
    }

    if($estado == 1){
        $estadox = 2;
    }else{
        $estadox = 1;
    }

    //Contruir la consulta
    $consulta2 = $conn->query("UPDATE usuarios SET idEstado=$estadox WHERE idUsuario=$id");

    //Redireccionar
    header("location: ../usuarios.php");
} else {
    echo "No se estan llenando todos los datos";
}