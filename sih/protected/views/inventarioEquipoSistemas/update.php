<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Equipos</span>',array('InventarioEquipoSistemas/admin')); ?>
	<br><br>
<h1>Actualizacion de: <?php echo $model->equipo." ".$model->modelo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'Areas'=>$Areas)); ?>