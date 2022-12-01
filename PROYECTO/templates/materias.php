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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Materias</title>
</head>

<body>

    <!-- Cabecera -->
    <?php
    include("../controladores/base.php");
    ?>

    <!-- Contenido -->
    <section id="contenedor">

        <h3 class="text_usuario">Materias</h3>
        <div>
            <div>
                <table>
                    <h6 class="subtitulo" align="center">Materias Agregadas</h6>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NRC</th>
                            <th scope="col">MATERIA</th>
                            <th scope="col">DOCENTE</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Control sobre la consulta
                        if ($resultado3->num_rows > 0) {
                            while ($row3 = $resultado3->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row3['idMateria'] . '</td>';
                                echo '<td>' . $row3['nrc'] . '</td>';
                                echo '<td>' . $row3['nombreMateria'] . '</td>';
                                echo '<td>' . $row3['nombreUsuario'] . ' ' . $row3['apellidoUsuario'] . '</td>';
                                echo '<td>' . $row3['estado'] . '</td>';
                                echo '<td>' . '<a href="materia.php?id=' . $row3['idMateria'] . '"class="btn_editar"> Editar </a>' . '</td>';
                                echo '<td>' . '<a href="controladorAdmin/eliminarMateria.php?id=' . $row3['idMateria'] . '"><button type="button" class="btn_eliminar" id="btn_desactivar_materia" onclick="return ConfirmDeleteMateria()">Cambiar Estado</button> </a>' . '</td>';
                                echo '</tr>';
                            }
                            $resultado3->free();
                        } else {
                            echo '<p><em> No existen datos registrados</em></p>';
                        }
                        ?>
                    </tbody>
                </table>
                <div align="center" class="contenedor_btn_agregar">
                    <a class="btn_format btn_agregar" href="insertarMateria.php">Agregar materia</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <pag-footer></pag-footer>


</body>

<!--Scripts-->
<script src="../assets/js/footer.js"></script>
<script src="../assets/js/configuraciones.js"></script>
<script src="../assets/js/jquery-3.6.0.min.js"></script>

<!--Ion Icons-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>