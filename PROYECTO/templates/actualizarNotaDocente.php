<?php
include("../controladores/main.php");
include("../controladores/docente.php");
include("controladorDocente/actualizarNota.php");

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
        <h3 class="text_usuario"><?php echo $materia ?></h3>
        <div>
            <div class="sub_contenedor">
                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                    <h6>Actualizar Nota</h6>
                    <div class="contenedor_form">
                        <div class="contenedor_interior">
                            <div class="contenedor_interior_left">
                                <label for="">Nota 1:</label>
                                <input class="input-text" type="text" type="text" value="<?php echo $nota1 ?>" name="nota1" placeholder="Cambiar ID" required>
                            </div>
                            <div class="contenedor_interior_right">
                                <label for="">Nota 2:</label>
                                <input class="input-text" type="text" type="text" value="<?php echo $nota2 ?>" name="nota2" placeholder="Cambiar estado" required>
                            </div>
                            <div class="contenedor_interior_right">
                                <label for="">Nota 3:</label>
                                <input class="input-text" type="text" type="text" value="<?php echo $nota3 ?>" name="nota3" placeholder="Cambiar estado" required>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor_botones">
                        <button type="submit" class="btn_format btn_enviar contenedor_interior_left" onclick="return ConfirmMateria()">Actualizar</button>
                        <a class="btn_format btn_cancelar contenedor_interior_right" href="inicio.php">Cancelar</a>
                    </div>
                </form>
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