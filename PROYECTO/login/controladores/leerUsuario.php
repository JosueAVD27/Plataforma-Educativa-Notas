<?php
    include("../controladores/main.php");

    if(isset($_GET['id']) && !empty(trim($_GET['id']))){
        $consulta = "SELECT * FROM usuarios 
                    INNER JOIN tipousuario ON usuarios.idTipo = tipousuario.idTipo
                    INNER JOIN estados ON usuarios.idEstado = estados.idEstado
                    WHERE usuarios.idUsuario = ?";
        if($stmt = $conn -> prepare($consulta)){
            $stmt -> bind_param('i', $_GET['id']);
            if($stmt -> execute()){
                $result = $stmt -> get_result();
                if($result -> num_rows == 1){
                    $row = $result -> fetch_array(MYSQLI_ASSOC);
                    $username = $row['username'];
                    $nombre = $row['nombreUsuario'];
                    $apellido = $row['apellidoUsuario'];
                    $cedula = $row['cedulaUsuario'];
                    $telefono = $row['telefonoUsuario'];
                    $correo = $row['correoUsuario'];
                    $foto = $row['fotoUsuario'];
                    $tipo = $row['tipo'];
                    $estado = $row['estado'];
                }else{
                    echo 'No exiten resultados';
                    exit();
                }
            }else{
                echo 'No ejecuto la consulta';
                exit();
            }
        }
        $stmt -> close();
        $conn -> close();
    }else{
        echo 'Error! Intente mas tarde';
        exit();
    }
?>