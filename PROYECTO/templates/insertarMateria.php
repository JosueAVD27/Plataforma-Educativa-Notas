<?php
include("../controladores/main.php");
include("../controladores/admin.php");
include("controladorAdmin/agregarMaterias.php");
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
    <link rel="stylesheet" type="text/css" href="../assets/css/permisos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Agregar Materia</title>
</head>

<body>

    <!-- Cabecera -->
    <?php
    include("../controladores/base.php");
    ?>

    <!-- Contenido -->
    <section id="contenedor">
        <h3 class="text_usuario">Agregar nueva materia</h3>
        <div class="contenedor">
        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                    <div class="contenedor_form">
                        <div class="contenedor_interior">
                            <div class="contenedor_interior_left">
                                <label for="">NRC:</label>
                                <input class="input-text" type="text" type="text" name="nrc"
                                    placeholder="Ingrese el NRC" required>
                            </div>
                            <div class="contenedor_interior_right">
                                <label for="">MATERIA:</label>
                                <input class="input-text" type="text" type="text" name="materia" placeholder="Nombre materia" required>
                            </div>
                            <div class="contenedor_interior_right">
                                <label for="">DOCENTE: </label>
                                <select class="input-text" name="docente">
                                    <option value="<?php echo $usuario ?>">Seleccione</option>
                                    <?php
                                    if ($resultadoM2->num_rows > 0) {
                                        while ($rowM2 = $resultadoM2->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $rowM2['idUsuario'] ?>">
                                        <?php echo $rowM2['nombreUsuario'] . ' ' . $rowM2['apellidoUsuario'] ?>
                                    </option>
                                    <?php
                                        }
                                        $resultadoM2->free();
                                    } else {
                                        echo '<p><em> No existen datos registrados</em></p>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor_botones">
                        <button type="submit" class="btn_format btn_enviar contenedor_interior_left"
                            onclick="return ConfirmAggMateria()">Guardar</button>
                        <a class="btn_format btn_cancelar contenedor_interior_right" href="materias.php">Cancelar</a>
                    </div>
                </form>

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
