<?php
// Sistema de enrutamiento
function obtenerPagina() {
    global $paginasPermitidas;
    
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $pagina = $_GET['page'];
        
        // Verificar si la página existe
        if (array_key_exists($pagina, $paginasPermitidas)) {
            return $pagina;
        } else {
            // Página no encontrada
            return '404';
        }
    }
    
    // Página por defecto
    return PAGINA_DEFECTO;
}

function obtenerTitulo($pagina) {
    global $paginasPermitidas;
    
    if ($pagina === '404') {
        return 'Página No Encontrada';
    }
    
    return $paginasPermitidas[$pagina]['titulo'] ?? 'Página No Encontrada';
}

function cargarContenido($pagina) {
    global $paginasPermitidas;
    
    if ($pagina === '404') {
        echo '<div class="alert alert-danger text-center">';
        echo '<h2>Error 404</h2>';
        echo '<p>La página que buscas no existe.</p>';
        echo '<a href="index.php?page=inicio" class="btn btn-primary">Volver al Inicio</a>';
        echo '</div>';
        return;
    }
    
    $archivo = 'pages/' . $paginasPermitidas[$pagina]['archivo'];
    
    if (file_exists($archivo)) {
        include $archivo;
    } else {
        echo '<div class="alert alert-warning">';
        echo '<p>El contenido de esta página no está disponible temporalmente.</p>';
        echo '</div>';
    }
}

// Función para verificar si una página está activa
function esPaginaActiva($pagina) {
    return (obtenerPagina() === $pagina) ? 'active' : '';
}
?>