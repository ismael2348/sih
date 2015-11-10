<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Stock</span>',array('inventarioConsumiblesSistemas/admin')); ?>
	<br><br>

<h1>Detalles del consumible  #<?php echo $model->area." ".$model->modelo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'area',
		'consumible_de',
		'tamano',
		'cantidad',
		'marca',
		'modelo',
		'fecha_reg',
		/*'activo',*/
	),
)); ?>
