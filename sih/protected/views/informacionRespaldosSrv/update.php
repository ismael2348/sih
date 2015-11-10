<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Respaldos</span>',array('informacionRespaldosSrv/admin')); ?>
	<br><br>
<h1>Actualizacion de: <?php echo $model->usuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>