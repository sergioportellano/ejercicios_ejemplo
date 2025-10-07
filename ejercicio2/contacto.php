<?php
// Incluir configuración
include 'config/config.php';
$pagina = 'contacto';

include 'includes/header.php';
include 'includes/menu.php';

echo '<main class="main-content">';
echo '<div class="container">';
include "pages/contacto.php";
echo '</div>';
echo '</main>';

include 'includes/footer.php';
?>