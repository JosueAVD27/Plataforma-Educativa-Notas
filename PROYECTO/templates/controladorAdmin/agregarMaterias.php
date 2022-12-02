<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Verificar que existan datos en ls variables enviadas
        if(isset($_POST['nrc']) && isset($_POST['materia']) && isset($_POST['docente'])){
            //Construir la consulta
            $query = "INSERT INTO materia(nrc, nombreMateria, idUsuario, idEstado) values (?, ?, ?, 1)";
            //Preparar la consulta para ejecutarla
            if($stmt = $conn -> prepare($query)){
                $stmt -> bind_param('isi',$_POST['nrc'], $_POST['materia'], $_POST['docente']);
                //Ejecutar
                if($stmt -> execute()){
                    header("location: materias.php");
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
    $consultaM2 = "SELECT idUsuario, nombreUsuario, apellidoUsuario FROM usuarios WHERE idTipo = 2 AND idEstado = 1";
    $resultadoM2 = $conn -> query($consultaM2);
?>
