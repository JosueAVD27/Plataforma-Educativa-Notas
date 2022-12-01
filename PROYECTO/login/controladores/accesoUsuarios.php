<?php
    //Creasion de la session
    SESSION_START();

    include("../../conexion/conexion.php");
    $conn=conectar();

    //Resivir los datos desde el formulario
    $correo = $_POST["login_correo"];
    $pass = $_POST["login_contrasenia"];

    //Controles - si hay valores en las variables de sesison
    if(isset($correo)){
        //Consultar si los datos estan en la base
        $consulta = "SELECT * FROM usuarios WHERE correoUsuario='$correo' AND claveUsuario='$pass'";

        //Ejecutar la consulta
        $resultados = mysqli_query($conn, $consulta) or die (mysqli_connect_errno());

        //Almacenar los datos en un arreglo
        $fila = mysqli_fetch_array($resultados);

        //Consultar si llegan los datos desde la consulta
        if($fila['idUsuario']==null){
            //Redirigir al login
            header("location: ../../login/");
        }else{
            //Definir las variables de session y redirige a una pagina de usuario
            $_SESSION["id"] = $fila['idUsuario'];
            $_SESSION["nombreUsuario"] = $fila['username'];
            $_SESSION["permisos"] = $fila['idTipo'];
            $_SESSION["fotoU"] = $fila['fotoUsuario'];

            header("location: ../../templates/inicio.php");
        }
    }else{
        header("location: ../../login/");
    }
?>