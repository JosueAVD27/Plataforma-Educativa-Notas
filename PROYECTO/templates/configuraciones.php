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
    <title>Configuraciones</title>
</head>

<body>

    <!-- Cabecera -->
    <?php
    include("../controladores/base.php");
    ?>

    <!-- Contenido -->
    <section id="contenedor">

        <h3 class="text_usuario">Configuraciones</h3>

        <div>
            <div>
                <table>
                    <h6 class="subtitulo" align="center">Permisos de usuario</h6>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">PERMISOS</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Control sobre la consulta
                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['idTipo'] . '</td>';
                                echo '<td>' . $row['tipo'] . '</td>';
                                echo '<td>' . '<a href="permisos.php?id=' . $row['idTipo'] . '"class="btn_editar"> Editar </a>' . '</td>';
                                if($row['idTipo'] == 1 || $row['idTipo'] == 2 || $row['idTipo'] == 3){
                                    $variable = "onclick='return ConfirmDeleteEstadoNegado(event)'";
                                }else{
                                    $variable = "onclick='return ConfirmDeleteTipo()'";
                                }
                                echo '<td>' . '<a href="controladorAdmin/eliminarPermiso.php?id=' . $row['idTipo'] . '"><button type="button" class="btn_eliminar" '. $variable .'>Eliminar</button> </a>' . '</td>';
                                echo '</tr>';
                            }
                            $resultado->free();
                        } else {
                            echo '<p><em> No existen datos registrados</em></p>';
                        }
                        ?>
                    </tbody>
                </table>
                <div align="center" class="contenedor_btn_agregar">
                    <a class="btn_format btn_agregar" href="insertarPermiso.php">Agregar permiso</a>
                </div>
            </div>

            <div class="contenedor2">
                <table>
                    <h6 class="subtitulo" align="center">Estados definidos</h6>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ESTADOS</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Control sobre la consulta
                        if ($resultado2->num_rows > 0) {
                            while ($row2 = $resultado2->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row2['idEstado'] . '</td>';
                                echo '<td>' . $row2['estado'] . '</td>';
                                echo '<td>' . '<a href="estados.php?id=' . $row2['idEstado'] . '"class="btn_editar"> Editar </a>' . '</td>';
                                if($row2['idEstado'] == 1 || $row2['idEstado'] == 2){
                                    $variable2 = "onclick='return ConfirmDeleteEstadoNegado(event)'";
                                }else{
                                    $variable2 = "onclick='return ConfirmDeleteEstado()'";
                                }
                                echo '<td>' . '<a href="controladorAdmin/eliminarEstado.php?id=' . $row2['idEstado'] . '"><button type="button" class="btn_eliminar" '. $variable2 .'>Eliminar</button> </a>' . '</td>';
                                echo '</tr>';
                            }
                            $resultado2->free();
                        } else {
                            echo '<p><em> No existen datos registrados</em></p>';
                        }
                        ?>
                    </tbody>
                </table>
                <div align="center" class="contenedor_btn_agregar">
                    <a class="btn_format btn_agregar" href="insertarEstado.php">Agregar estado</a>
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