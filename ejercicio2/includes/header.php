<?php
// Información dinámica
$fechaActual = date('d/m/Y');
$horaActual = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITIO_NOMBRE; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="header">
    <div class="header-container">
        <div class="header-logo-section">
            <img src="assets/images/logo.png" alt="Logo <?php echo SITIO_NOMBRE; ?>"
                 class="header-logo">
            <div class="header-brand-text">
                <h1><?php echo SITIO_NOMBRE; ?></h1>
            </div>
        </div>

        <div class="header-info">
            <p class="header-date">
                <strong>Fecha:</strong> <?php echo $fechaActual; ?> |
                <strong>Hora:</strong> <?php echo $horaActual; ?>
            </p>
        </div>
    </div>
</header>