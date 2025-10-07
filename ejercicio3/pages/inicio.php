<?php
global $usuario;
?>
<div class="row">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-4 mb-4">Ejercicio 3</h1>
        <p class="lead">Sistema de Navegación Dinámico</p>
        
        <div class="card mt-4">
            <div class="card-header">
                <h3>Información del Usuario</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nombre:</strong> <?php echo $usuario['nombre']; ?></p>
                        <p><strong>Edad:</strong> <?php echo $usuario['edad']; ?> años</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Ciudad:</strong> <?php echo $usuario['ciudad']; ?></p>
                        <p><strong>Profesión:</strong> <?php echo $usuario['profesion']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-bg-primary">
                    <div class="card-body">
                        <h5>Dinámico</h5>
                        <p>Sistema de rutas con $_GET</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5>Validación</h5>
                        <p>Validación de páginas existentes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-bg-warning">
                    <div class="card-body">
                        <h5>CSS Aplicado</h5>
                        <p>Bootstrap 5 para diseño responsive</p>
                    </div>
                </div>
            </div>
			<div class="col-md-3">
                <div class="card text-bg-info">
                    <div class="card-body">
                        <h5>Menú con hover</h5>
                        <p>Navegación activa según página actual</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>