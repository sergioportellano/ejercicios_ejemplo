<?php
global $usuario;
?>
<div class="row">
    <div class="col-lg-10 mx-auto">
        <h1>Información del desarrollo</h1>
        <div class="alert alert-info">
            <p><strong>Desarrollador:</strong> <?php echo $usuario['nombre']; ?></p>
			<p><strong>Centro:</strong> <?php echo $usuario['centro']; ?></p>
            <p><strong>Ubicación:</strong> <?php echo $usuario['ciudad']; ?></p>
            <p><strong>Fecha:</strong> <?php echo date('d/m/Y'); ?></p>
        </div>
    </div>
</div>