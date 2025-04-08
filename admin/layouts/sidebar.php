<?php
//definir los permisos de usuario
//obener el user level de tabla users
$user_level = find_by_sql('SELECT user_level FROM users WHERE id =' . (int)$_SESSION['user_id']);
$user_level = $user_level[0]['user_level'];
?>

<!-- Sidebar -->
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">SAE</span>
        </a>

        <ul class="sidebar-nav">
            <!-- Dashboard -->
            <li class="sidebar-header">Pages</li>

            <li class="sidebar-item <?= $page == "home" ? "active" : ""; ?>">
                <a class="sidebar-link" href="home.php"> <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span> </a>
            </li>
            <!-- Fin Dashboard -->

            <?php
            //mostrar solo si el usuario es administrador
            if ($user_level == 1) { ?>
                <!-- Menu HR -->
                <li class="sidebar-header">Administracion</li>

                <li class="sidebar-item <?= $separador == "Usuarios" ? "active" : ""; ?>">
                    <a data-bs-target="#HR_menu" data-bs-toggle="collapse" class="sidebar-link <?= $separador == "Usuarios" ? "" : "collapsed"; ?>"><i class="align-middle" data-feather="users"></i>Usuarios</a>
                    <ul id="HR_menu" class="sidebar-dropdown list-unstyled collapse <?= $separador == "Usuarios" ? "show" : ""; ?>">
                        <li class="sidebar-item <?= $page == "Usuarios" ? "active" : ""; ?>">
                            <a class="sidebar-link" href="./usuarios.php">Gestion de Usuarios</a>
                        </li>
                    </ul>
                </li>
            <?php
            }
            ?>


            <!-- Fin Menu Principal -->

            <!-- Configuracion -->
            <li class="sidebar-header">Configuracion</li>

            <li class="sidebar-item <?= $page == "perfil" ? "active" : ""; ?>">
                <a class="sidebar-link" href="perfil.php"> <i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span> </a>
            </li>

            <li class="sidebar-item <?= $page == "configuracion" ? "active" : ""; ?>">
                <a class="sidebar-link" href="configuracion.php"> <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Ajustes</span> </a>
            </li>
            <!-- Fin Configuracion -->


        </ul>

    </div>
</nav>
<!-- Fin Sidebar -->