<nav class="nav_cabezera">
    <ul class="contenedor_nav">
        <li class="lista_item lista_item_titulo">
            <h4>PLATAFORMA</h4>
        </li>
        <li class="lista_item item_navbar">
            <?php echo '<a class="btn_usuario navbar-item" href="../login/usuario.php?id=' . $_SESSION['id'] . '">' ?>
            <ion-icon name="person-circle-outline"></ion-icon> <?php echo $_SESSION['nombreUsuario'] ?>
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
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="search-outline"></ion-icon>
                </div>
                <span class="link-text">Search</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
                <span class="link-text">Home</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="folder-open-outline"></ion-icon>
                </div>
                <span class="link-text">Projects</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="pie-chart-outline"></ion-icon>
                </div>
                <span class="link-text">Dashboard</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
                <span class="link-text">Team</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
                <span class="link-text">Support</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="settings-outline"></ion-icon>
                </div>
                <span class="link-text">Settings</span>
            </a>
        </li>
    </ul>
</nav>