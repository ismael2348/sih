<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Equipos</span>',array('inventarioEquipoSistemas/admin')); ?>
	<br><br>
<div class="centrar">
<h1>Registro de Equipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'Areas'=>$Areas)); ?>
</div>