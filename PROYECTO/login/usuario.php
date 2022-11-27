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

        <h3 class="text_usuario"><ion-icon name="person-circle-outline" class="icono_usuario"></ion-icon> Usuario</h3>

        <div class="contenedor_interno">
            <div class="contenedor_interno_left contenedor_foto">
                <div class="foto_perfil">
                    <?php echo '<img class="fotoUsuario" src="data:image/png;base64,'.base64_encode($foto).'"/>'; ?>
                </div>
                <div class="nombre_perfil">
                    <h6><?php echo $nombre . " " . $apellido ?></h6>
                    <p><?php echo $tipo ?></p>
                </div>
            </div>
            <div class="contenedor_interno_right">
                <h6>Datos personales</h6>
                <div class="contenedor_datos1">
                    <div>
                        <div>
                            <label for="">Nombre de usuario</label>
                            <p><?php echo $username ?></p>
                        </div>
                        <div>
                            <label for="">Cedula</label>
                            <p><?php echo $cedula ?></p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="">Nombre</label>
                            <p><?php echo $nombre . " " . $apellido ?></p>
                        </div>
                        <div>
                            <label for="">Telefono</label>
                            <p><?php echo $telefono ?></p>
                        </div>
                    </div>  
                </div>
                <div>
                    <label for="">Correo</label>
                    <p class="datos_letras"><?php echo $correo ?></p>
                </div>
                <div class="contenedor_botones">
                    <div class="contenedor_datos2">
                        <a class="btn_actualizar" href="#">Actualizar datos</a>
                    </div>
                </div>
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