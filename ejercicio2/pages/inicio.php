<?php
global $usuario;
?>
<div class="row">
    <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-4 mb-4">Ejercicio 2</h1>

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
    </div>
</div>