<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Respaldos</span>',array('informacionRespaldosSrv/admin')); ?>
	<br><br>

<h1>Vetalles del codigo#<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'numero',
	),
)); ?>
