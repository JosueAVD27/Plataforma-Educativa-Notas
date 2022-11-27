<?php
include("controladores/leerUsuario.php");
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
    <link rel="stylesheet" type="text/css" href="../assets/css/usuario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Datos de Usuario</title>
</head>

<body>
    <!-- Cabecera -->
    <?php
    include("../controladores/base.php");
    ?>

    <!-- Contenido -->
    <section id="contenedor">

        <h3 class="text_usuario">
            <ion-icon name="person-circle-outline" class="icono_usuario"></ion-icon> Usuario
        </h3>
        <div>
            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="multipart/form-data">
                <div class="contenedor_interno">

                    <div class="contenedor_interno_left contenedor_foto">
                        <div class="foto_perfil">
                            <div class="image-upload">
                                <label for="file-input">
                                    <?php echo '<img id="imagenPrevisualizacion" class="fotoUsuario" src="data:image/png;base64,' . base64_encode($foto) . '" alt="Click aquí para subir tu foto" title="Click aquí para subir tu foto"/>'; ?>
                                </label>
                                <input id="file-input" type="file" name="image" />
                                <figcaption><p>Cambiar foto</p></figcaption>
                            </div>
                        </div>
                        <div class="nombre_perfil">
                            <h6><?php echo $nombre . " " . $apellido ?></h6>
                            <p><?php echo $tipo ?></p>
                        </div>
                    </div>
                    <div class="contenedor_interno_right">
                        <h6>Datos personales</h6>

                        <div class="contenedor_datos1">
                            <div class="contenedor_left">
                                <div>
                                    <label for="">Nombre de usuario</label>
                                    <input class="input-text" type="text" value="<?php echo $username ?>" disabled>
                                </div>
                                <div>
                                    <label for="">Nombre</label>
                                    <input class="input-text" type="text" name="nombreU" value="<?php echo $nombre ?>" required>
                                </div>
                                <div>
                                    <label for="">Cedula</label>
                                    <input class="input-text" type="text" name="cedulaU" value="<?php echo $cedula ?>" required>
                                </div>
                            </div>
                            <div class="contenedor_right">
                                <div>
                                    <label for="">Correo</label>
                                    <input class="input-text" type="email" name="correoU" value="<?php echo $correo ?>" required>
                                </div>
                                <div>
                                    <label for="">Apellido</label>
                                    <input class="input-text" type="text" name="apellidoU" value="<?php echo $apellido ?>" required>
                                </div>
                                <div>
                                    <label for="">Telefono</label>
                                    <input class="input-text" type="text" name="telefonoU" value="<?php echo $telefono ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="contenedor_botones">
                            <div class="contenedor_datos2">
                                <input class="btn_actualizar" type="submit" value="Actualizar datos">
                            </div>
                        </div>

                    </div>

                </div>
            </form>






        </div>
    </section>

    <!-- Footer -->
    <pag-footer></pag-footer>

</body>

<!--Scripts-->
<script src="../assets/js/footer.js"></script>
<script src="../assets/js/usuario.js"></script>
<script src="../assets/js/jquery-3.6.0.min.js"></script>

<!--Ion Icons-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>