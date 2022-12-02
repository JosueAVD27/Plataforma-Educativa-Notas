<nav class="nav_cabezera">
    <ul class="contenedor_nav">
        <li class="lista_item lista_item_titulo">
            <h4>PLATAFORMA</h4>
        </li>
        <li class="lista_item item_navbar">
            <?php echo '<a class="btn_usuario navbar-item" href="../login/usuario.php?id=' . $_SESSION['id'] . '">' ?>
            <?php echo '<img class="fotoUsuario_base" src="data:image/png;base64,'.base64_encode($_SESSION['fotoU']).'"/>' . $_SESSION['nombreUsuario'] ?>
            </a>
        </li>
        <li class="lista_item item_navbar">
            <a class="btn_cerrar navbar-item" href="../login/controladores/desconectarUsuario.php">Salir <ion-icon name="log-out-outline"></ion-icon></a>
        </li>
    </ul>
</nav>

<nav id="navbar">
    <ul class="navbar-items flexbox-col">
        <li class="navbar-logo flexbox-left">
            <a class="navbar-item-inner flexbox" href="../templates/inicio.php">
                <img class="dimencion_Logo" src="../assets/imagenes/logoPagina.png" alt="Logo pagina">
            </a>
            <span class="link-text letras_logo">Desarrollo Web</span>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left" href="../templates/inicio.php">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
                <span class="link-text">Inicio</span>
            </a>
        </li>

        <?php
            if($_SESSION["permisos"] == 3){
        ?>
                <li class="navbar-item flexbox-left">
                    <a class="navbar-item-inner flexbox-left" href="../templates/usuarios.php">
                        <div class="navbar-item-inner-icon-wrapper flexbox">
                            <ion-icon name="person-add-outline"></ion-icon>
                        </div>
                        <span class="link-text">Usuarios</span>
                    </a>
                </li>
        <?php
            }
        ?>

        <?php
            if($_SESSION["permisos"] == 3){
        ?>
                <li class="navbar-item flexbox-left">
                    <a class="navbar-item-inner flexbox-left" href="registros.php">
                        <div class="navbar-item-inner-icon-wrapper flexbox">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </div>
                        <span class="link-text">Inscripciones</span>
                    </a>
                </li>
        <?php
            }
        ?>

        <?php
            if($_SESSION["permisos"] == 3){
        ?>
                <li class="navbar-item flexbox-left">
                    <a class="navbar-item-inner flexbox-left" href="../templates/materias.php">
                        <div class="navbar-item-inner-icon-wrapper flexbox">
                            <ion-icon name="duplicate-outline"></ion-icon>
                        </div>
                        <span class="link-text">Materias</span>
                    </a>
                </li>
        <?php
            }
        ?>
        <?php
            if($_SESSION["permisos"] == 3){
        ?>
                <li class="navbar-item flexbox-left">
                    <a class="navbar-item-inner flexbox-left" href="../templates/configuraciones.php">
                        <div class="navbar-item-inner-icon-wrapper flexbox">
                            <ion-icon name="settings-outline"></ion-icon>
                        </div>
                        <span class="link-text">Configuraciones</span>
                    </a>
                </li>
        <?php
            }else{
        ?>
                <li class="navbar-item flexbox-left">
                    <a class="navbar-item-inner flexbox-left" href="#">
                        <div class="navbar-item-inner-icon-wrapper flexbox">
                            <ion-icon name="settings-outline"></ion-icon>
                        </div>
                        <span class="link-text">Configuraciones</span>
                    </a>
                </li>
        <?php
            }
        ?>
    </ul>
</nav>
