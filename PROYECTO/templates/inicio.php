<?php
include("../controladores/main.php");
include("../controladores/control.php");
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
    <link rel="stylesheet" type="text/css" href="../assets/css/inicio.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Inicio</title>
</head>

<body>
    <!-- Cabecera -->
    <?php
    include("../controladores/base.php");
    ?>

    <!-- Contenido -->
    <section id="contenedor">
        <h3 class="text_usuario">Inicio</h3>
        <div>

            <div class="interno">
                <?php
                if ($_SESSION['permisos'] == 1) {
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                ?>
                            <a class="contenedor_targeta" href="notasEstudiante.php?id=<?php echo $row['idMateria']?>">
                                <div class="contenedor_titulo">
                                    <h6><?php echo $row['nombreMateria'] ?></h6>
                                </div>
                                <div class="contenedor_contenido">
                                    <div>
                                        <label for="">NRC:</label>
                                        <p><?php echo $row['nrc'] ?></p>
                                    </div>
                                    <div>
                                        <label for="">DOCENTE:</label>
                                        <p><?php echo $row['NombreDocente'] . ' ' . $row['ApellidoDocente'] ?></p>
                                    </div>
                                </div>
                            </a>
                <?php
                        }
                        $resultado->free();
                    } else {
                        echo '<p><em> No existen cursos registrados</em></p>';
                    }
                }
                ?>

                <?php
                if ($_SESSION['permisos'] == 2) {
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                ?>
                            <a class="contenedor_targeta" href="notasDocente.php?id=<?php echo $row['idMateria']?>">
                                <div class="contenedor_titulo">
                                    <h6><?php echo $row['nombreMateria'] ?></h6>
                                </div>
                                <div class="contenedor_contenido">
                                    <div>
                                        <label for="">NRC:</label>
                                        <p><?php echo $row['nrc'] ?></p>
                                    </div>
                                </div>
                            </a>
                <?php
                        }
                        $resultado->free();
                    } else {
                        echo '<p><em> No existen datos registrados</em></p>';
                    }
                }
                ?>

                <?php
                if ($_SESSION['permisos'] == 3) {

                ?>
                    <div>
                        <h1>Bienvenido!</h1>
                        <h2>ERES ADMINISTRADOR!</h2>
                    </div>
                <?php
                }
                ?>
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