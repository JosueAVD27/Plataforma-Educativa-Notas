<?php
//Leer los datos y visualizar los valores en las casillas
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $consulta = "SELECT U.*, T.tipo, E.estado FROM usuarios AS U
                INNER JOIN estados AS E ON U.idEstado = E.idEstado
                INNER JOIN tipousuario AS T ON U.idTipo = T.idTipo WHERE idUsuario = ?";
    if ($stmt = $conn->prepare($consulta)) {
        $stmt->bind_param('i', $_GET['id']);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $usuario = $row['username'];
                $nombre = $row['nombreUsuario'];
                $apellido = $row['apellidoUsuario'];
                $clave = $row['claveUsuario'];
                $cedula = $row['cedulaUsuario'];
                $telefono = $row['telefonoUsuario'];
                $correo = $row['correoUsuario'];
                $idTipo = $row['idTipo'];
                $tipo = $row['tipo'];
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
    header("location: ../usuarios.php");
    exit();
}


//Consulta para obtener todos los docentes
$consultaU2 = "SELECT * FROM tipousuario";
$resultadoU2 = $conn -> query($consultaU2);


//Tomar los datos editador y actualizarlos en la base
//Verificar si los canpos son enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Verificar si los datos de las variables estan enviadas
    if (
        isset($_POST['usuario']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['clave']) && isset($_POST['cedula']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['tipo'])
    ) {
        //Contruir la consulta
        $consultaM3 = "UPDATE usuarios SET username=?, nombreUsuario=?, apellidoUsuario=?, claveUsuario=?, cedulaUsuario=?, telefonoUsuario=?, correoUsuario=?, idTipo=? WHERE idUsuario=?";
        //Prepra la consulta para ejecutarla
        if ($stmt = $conn->prepare($consultaM3)) {
            $stmt->bind_param(
                'sssssssii',
                $_POST['usuario'],
                $_POST['nombre'],
                $_POST['apellido'],
                $_POST['clave'],
                $_POST['cedula'],
                $_POST['telefono'],
                $_POST['correo'],
                $_POST['tipo'],
                $_GET['id']
            );
            //Ejecutar statement
            if ($stmt->execute()) {
                header('location: usuarios.php');
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