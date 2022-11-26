<?php
    SESSION_START();

    if($_SESSION['id'] != null){
        //Eliminar los datos de las variables iniciadas
        SESSION_UNSET();

        //Destruye los objetos creados en la sesion
        SESSION_DESTROY();

        header("location: ../");
    } else{
        header("location: index.html");
    }
?>