<?php
    include("../controladores/main.php");

    //Obtener
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


    $conn=conectar();



    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Verificar si los datos de las variables estan enviadas
        //Revisar imagen

        if (
            isset($_POST['nombreU']) && isset($_POST['apellidoU']) && isset($_POST['cedulaU']) && isset($_POST['telefonoU']) && isset($_POST['correoU'])
        ) {

            if(!empty($_FILES['image']['tmp_name'])){
                $revisar = getimagesize($_FILES["image"]["tmp_name"]);
                if ($revisar !== false) {


                    //Contruir la consulta
                    $consulta = "UPDATE usuarios SET nombreUsuario=?, apellidoUsuario=?, cedulaUsuario=?, 
                            telefonoUsuario=?, correoUsuario=?, fotoUsuario=? WHERE idUsuario=?";
                    //Prepra la consulta para ejecutarla
                    if ($stmt = $conn->prepare($consulta)) {
                        $stmt->bind_param(
                            'ssssssi',
                            $_POST['nombreU'],
                            $_POST['apellidoU'],
                            $_POST['cedulaU'],
                            $_POST['telefonoU'],
                            $_POST['correoU'],
                            file_get_contents($_FILES['image']['tmp_name']),
                            $_GET['id']
                        );
                        //Ejecutar statement
                        if ($stmt->execute()) {
                            header('location: ../templates/inicio.php');
                            exit();
                        } else {
                            echo "Error! el estatement no ejecuto";
                        }
                        $stmt->close();
                    } else {
                        echo "Erorr en la ejecusion del statement";
                    }
                }
            }else{
                //Contruir la consulta
                $consulta = "UPDATE usuarios SET nombreUsuario=?, apellidoUsuario=?, cedulaUsuario=?, 
                        telefonoUsuario=?, correoUsuario=? WHERE idUsuario=?";
                //Prepra la consulta para ejecutarla
                if ($stmt = $conn->prepare($consulta)) {
                    $stmt->bind_param(
                        'sssssi',
                        $_POST['nombreU'],
                        $_POST['apellidoU'],
                        $_POST['cedulaU'],
                        $_POST['telefonoU'],
                        $_POST['correoU'],
                        $_GET['id']
                    );
                    //Ejecutar statement
                    if ($stmt->execute()) {
                        header('location: ../templates/inicio.php');
                        exit();
                    } else {
                        echo "Error! el estatement no ejecuto";
                    }
                    $stmt->close();
                } else {
                    echo "Erorr en la ejecusion del statement";
                }
            }

                
        } else {
            echo "No se estan llenando todos los datos";
        }
        $conn->close();
    }
