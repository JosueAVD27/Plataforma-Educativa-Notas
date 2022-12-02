<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Verificar que existan datos en ls variables enviadas
        if(isset($_POST['estado'])){
            //Construir la consulta
            $query = "INSERT INTO estados(estado) values (?)";
            //Preparar la consulta para ejecutarla
            if($stmt = $conn -> prepare($query)){
                $stmt -> bind_param('s',$_POST['estado']);
                //Ejecutar
                if($stmt -> execute()){
                    header("location: configuraciones.php");
                    exit();
                }else{
                    echo "Error! El statement no se ejecuto";
                }
                $stmt -> close();
            }else{
                echo "Error en la preparacion del statement.";
            }
        }else{
            echo "No se estan llenando todos los campos.";
        }
        $conn -> close();
    }else{
        //echo "No se llegaron los datos por el método POST.";
    }

?>
