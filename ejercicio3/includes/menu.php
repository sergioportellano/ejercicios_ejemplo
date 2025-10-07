<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo esPaginaActiva('inicio'); ?>" 
                       href="index.php?page=inicio">
                       Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo esPaginaActiva('acerca'); ?>" 
                       href="index.php?page=acerca">
                       Acerca de
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo esPaginaActiva('servicios'); ?>" 
                       href="index.php?page=servicios">
                       Servicios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo esPaginaActiva('contacto'); ?>" 
                       href="index.php?page=contacto">
                       Contacto
                    </a>
                </li>
            </ul>
            
            <span class="navbar-text">
                <?php echo SITIO_NOMBRE; ?> v.<?php echo SITIO_VERSION; ?>
            </span>
        </div>
    </div>
</nav>