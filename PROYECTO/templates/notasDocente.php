<?php
include("../controladores/main.php");
include("../controladores/docente.php");

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
    <title>Notas</title>
</head>

<body>
    <!-- Cabecera -->
    <?php
    include("../controladores/base.php");
    ?>

    <!-- Contenido -->
    <section id="contenedor">
        <h3 class="text_usuario"><?php echo $materia ?></h3>
        <div>

            <div>
                <table>
                    <h6 class="subtitulo" align="center">Registro de notas</h6>
                    <thead>
                        <tr>
                            <th scope="col">ESTUDIANTE</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">NOTA1</th>
                            <th scope="col">NOTA2</th>
                            <th scope="col">NOTA3</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Control sobre la consulta
                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['nombreUsuario'] . ' ' . $row['apellidoUsuario'] . '</td>';
                                echo '<td>' . $row['correoUsuario'] . '</td>';
                                echo '<td>' .  $row['nota1'] . '</td>';
                                echo '<td>' .  $row['nota2'] . '</td>';
                                echo '<td>' .  $row['nota3'] . '</td>';
                                echo '<td>' . '<a href="actualizarNotaDocente.php?id=' . $row['idNotas'] . '"class="btn_editar"> Editar </a>' . '</td>';
                                echo '</tr>';
                            }
                            $resultado->free();
                        } else {
                            echo '<p><em> No existen estudiantes registrados</em></p>';
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
<script src="../assets/js/inicio.js"></script>

<!--Ion Icons-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>