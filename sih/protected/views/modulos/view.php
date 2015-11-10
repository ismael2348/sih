<?php echo CHtml::link('<span class="botonAccionAdd">Lita de <br> Modulos</span>',array('modulos/admin')); ?>

<h1>View Modulos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'activo',
	),
)); ?>
