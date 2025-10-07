<?php
// Configuración básica del sitio
define('SITIO_NOMBRE', 'Mi Proyecto');
define('SITIO_VERSION', '1.0.0');

// Configuración de rutas
define('PAGINA_DEFECTO', 'inicio');

// Páginas permitidas
$paginasPermitidas = [
    'inicio' => [
        'titulo' => 'Inicio',
        'archivo' => 'inicio.php'
    ],
    'acerca' => [
        'titulo' => 'Acerca de Nosotros',
        'archivo' => 'acerca.php'
    ],
    'servicios' => [
        'titulo' => 'Nuestros Servicios',
        'archivo' => 'servicios.php'
    ],
    'contacto' => [
        'titulo' => 'Contacto',
        'archivo' => 'contacto.php'
    ]
];

// Información del usuario
$usuario = [
    'nombre' => 'Sergio Portellano Pérez',
    'edad' => 29,
	'centro' => 'Escuela Arte Granada',
    'ciudad' => 'Granada',
    'profesion' => 'Desarrollador Full-Stack'
];
?>