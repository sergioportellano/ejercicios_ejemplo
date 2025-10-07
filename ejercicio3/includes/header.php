<?php
// Información dinámica
$fechaActual = date('d/m/Y');
$horaActual = date('H:i:s');
?>
<header class="bg-primary text-white header-fixed">
    <div class="container">
        <div class="row align-items-center header-content">
            <!-- Columna para logo/imagen -->
            <div class="col-md-3">
                <div class="d-flex align-items-center h-100">
                    <img src="assets/images/logo.png" alt="Logo <?php echo SITIO_NOMBRE; ?>" 
                         class="header-logo">
                    <div class="header-brand-text ms-3">
                        <h1 class="h5 mb-0"><?php echo SITIO_NOMBRE; ?></h1>
                        <small class="text-light">v.<?php echo SITIO_VERSION; ?></small>
                    </div>
                </div>
            </div>
            
            <!-- Columna para fecha y hora -->
            <div class="col-md-8 text-end">
                <p class="mb-0 header-date-info">
                    <strong>Fecha:</strong> <?php echo $fechaActual; ?> | 
                    <strong>Hora:</strong> <?php echo $horaActual; ?>
                </p>
            </div>
        </div>
    </div>
    
    <!-- Menú de navegación -->
    <?php include 'includes/menu.php'; ?>
</header>