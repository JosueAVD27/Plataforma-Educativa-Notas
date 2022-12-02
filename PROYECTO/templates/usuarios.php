<?php
include("../controladores/main.php");
include("../controladores/admin.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FAVICON-->
    <link rel="icon" type="image/png" href="../assets/imagenes/FavIcon.png">
    <!--ESTILOS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/configuraciones.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Usuarios</title>
</head>

<body>

    <!-- Cabecera -->
    <?php
    include("../controladores/base.php");
    ?>

    <!-- Contenido -->
    <section id="contenedor">

        <h3 class="text_usuario">Usuarios</h3>
        <div>
            <div>
                <table>
                    <h6 class="subtitulo" align="center">Todos los usuarios</h6>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">CEDULA</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">TIPO</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Control sobre la consulta
                        if ($resultado4->num_rows > 0) {
                            while ($row4 = $resultado4->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row4['idUsuario'] . '</td>';
                                echo '<td>' . $row4['username'] . '</td>';
                                echo '<td>' . $row4['nombreUsuario'] . ' ' . $row4['apellidoUsuario'] . '</td>';
                                echo '<td>' . $row4['cedulaUsuario'] . '</td>';
                                echo '<td>' . $row4['telefonoUsuario'] . '</td>';
                                echo '<td>' . $row4['correoUsuario'] . '</td>';
                                echo '<td>' . $row4['tipo'] . '</td>';
                                echo '<td>' . $row4['estado'] . '</td>';

                                echo '<td>' . '<a href="usuario.php?id=' . $row4['idUsuario'] . '"class="btn_editar"> Editar </a>' . '</td>';
                                echo '<td>' . '<a href="controladorAdmin/eliminarUsuario.php?id=' . $row4['idUsuario'] . '"><button type="button" class="btn_eliminar" id="btn_desactivar_materia" onclick="return ConfirmDeleteMateria()">Cambiar</button> </a>' . '</td>';
                                echo '</tr>';
                            }
                            $resultado4->free();
                        } else {
                            echo '<p><em> No existen datos registrados</em></p>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <pag-footer></pag-footer>


</body>

<!--Scripts-->
<script src="../assets/js/footer.js"></script>
<script src="../assets/js/jquery-3.6.0.min.js"></script>

<!--Ion Icons-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>