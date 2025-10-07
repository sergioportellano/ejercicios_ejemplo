<?php
// Incluir configuración
include 'config/config.php';

// Determinar página actual
$pagina = 'inicio';

// Incluir header
include 'includes/header.php';

// Incluir menú
include 'includes/menu.php';

// Contenido principal
echo '<main class="main-content">';
echo '<div class="container">';

// Cargar página de inicio
include "pages/inicio.php";

echo '</div>';
echo '</main>';

// Incluir footer
include 'includes/footer.php';
?>