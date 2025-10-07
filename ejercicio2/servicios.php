<?php
// Configuración del sitio
define('SITIO_NOMBRE', 'Ejercicio 2');
define('SITIO_VERSION', '1.0');
$pagina = 'servicios';

include 'includes/header.php';
include 'includes/menu.php';

echo '<main class="main-content">';
echo '<div class="container">';
include "pages/servicios.php";
echo '</div>';
echo '</main>';

include 'includes/footer.php';
?>