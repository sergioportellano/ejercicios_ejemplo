<?php
// Variables PHP
$nombre = "Sergio Portellano";
$edad = 29;
$ciudad = "Granada";
$fecha_actual = date('d/m/Y');
$hora_actual = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f0f0f0;
        }
        
        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        
        .info-box {
            background: #e9e9e9;
            padding: 15px;
            margin: 15px 0;
            border-left: 4px solid #333;
        }
        
        .variable {
            color: #d00;
            font-weight: bold;
        }
        
        .fecha-hora {
            background: #333;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ejercicio 1</h1>
        
        <div class="info-box">
            <h2>Información Personal</h2>
            <p><strong>Nombre:</strong> <span class="variable"><?php echo $nombre; ?></span></p>
            <p><strong>Edad:</strong> <span class="variable"><?php echo $edad; ?> años</p></span>
            <p><strong>Ciudad:</strong> <span class="variable"><?php echo $ciudad; ?></span></p>
        </div>
        
        <div class="info-box">
            <h2>Variables PHP Usadas</h2>
            <p><code>$nombre = "<?php echo $nombre; ?>"</code></p>
            <p><code>$edad = <?php echo $edad; ?></code></p>
            <p><code>$ciudad = "<?php echo $ciudad; ?>"</code></p>
        </div>
        
        <div class="fecha-hora">
            <p><strong>Fecha actual:</strong> <?php echo $fecha_actual; ?></p>
            <p><strong>Hora actual:</strong> <?php echo $hora_actual; ?></p>
        </div>
    </div>
</body>
</html>