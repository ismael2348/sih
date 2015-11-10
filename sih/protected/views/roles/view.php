<?php echo CHtml::link('<span class="botonAccionAdd">Lista <br> de Roles</span>',array('roles/admin')); ?>
<br><br>

<h1>Detalles de el Rol #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'activo',
	),
)); ?>
