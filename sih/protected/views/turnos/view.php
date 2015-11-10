
<?php echo CHtml::link('<span class="botonAccionAdd">Lista de <br> Turnos</span>',array('turnos/admin')); ?>
<h1>Detalles del Turno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'horaentrada',
		'horasalida',
		'activo',
	),
)); ?>
