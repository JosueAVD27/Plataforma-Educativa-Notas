<?php
    include("../../conexion/conexion.php");
    $conn=conectar();

    if(isset($_GET['id']) && !empty(trim($_GET['id']))){
        $consulta = 'DELETE FROM tipousuario WHERE idTipo=?';
        if($stmt = $conn -> prepare($consulta)){
            $stmt -> bind_param('i', $_GET['id']);
            if($stmt -> execute()){
                header('location: ../configuraciones.php');
                exit();
            }else{
                echo 'Error! No se ejecuto la consulta en la base de datos';
                exit();
            }
        }
        $conn -> close();
    }else{
        echo 'Error! Intente mas tarde';
        exit();
    }
?>