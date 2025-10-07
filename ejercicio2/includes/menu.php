<nav class="navbar">
    <div class="nav-container">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="index.php" class="nav-link <?php echo $pagina == 'inicio' ? 'active' : ''; ?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="acerca.php" class="nav-link <?php echo $pagina == 'acerca' ? 'active' : ''; ?>">Acerca de</a>
            </li>
            <li class="nav-item">
                <a href="servicios.php" class="nav-link <?php echo $pagina == 'servicios' ? 'active' : ''; ?>">Servicios</a>
            </li>
            <li class="nav-item">
                <a href="contacto.php" class="nav-link <?php echo $pagina == 'contacto' ? 'active' : ''; ?>">Contacto</a>
            </li>
        </ul>

        <div class="nav-site-info">
            <?php echo SITIO_NOMBRE; ?>
        </div>
    </div>
</nav>