<?php

    //Actualizar
    //Obtener
    if(isset($_GET['id']) && !empty(trim($_GET['id']))){
        //Revisar imagen
        $revisar = getimagesize($_FILES["imageU"]["tmp_name"]);
        if($revisar !== false){
            $image = $_FILES['imageU']['tmp_name'];
            $imgContenido = addslashes(file_get_contents($image));    

            //Verificar si los datos de las variables estan enviadas
            if(isset($_POST['nombreU']) && isset($_POST['apellidoU']) && isset($_POST['cedulaU']) && isset($_POST['telefonoU']) && isset($_POST['correoU'])){

                //Variables
                $id=$_GET['id'];
                $nombreUser=$_POST['nombreU'];
                $apellidoUser=$_POST['apellidoU'];
                $cedulaUser=$_POST['cedulaU'];
                $telefonoUser=$_POST['telefonoU'];
                $correoUser=$_POST['correoU'];

                //Contruir la consulta
                $consulta = $conn->query("UPDATE usuarios SET nombreUsuario=$nombreUser, apellidoUsuario=$apellidoUser, cedulaUsuario=$cedulaUser, telefonoUsuario=$telefonoUser, 	correoUsuario=$correoUser, fotoUsuario=$imgContenido WHERE idUsuario=$id");

                //Redireccionar
                header("location: ../index.html");

            }else{
                echo "No se estan llenando todos los datos";
            }
            $conn -> close();
        }else{
            //echo "no llenaron los datos por el metodo POST";
        }
    }
?>