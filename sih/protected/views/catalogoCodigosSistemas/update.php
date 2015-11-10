<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Respaldos</span>',array('catalogoCodigosSistemas/admin')); ?>
	<br><br>

<h1>Actualizacion del codigo #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>