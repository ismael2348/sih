<?php echo CHtml::link('<span class="botonAccionAdd">Lista de <br>IPS</span>',array('inventIp/admin')); ?>
<br><br>

<h1>Detalles de la Ip -[<?php echo $model->ip; ?>]-</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ip',
		'activo',
	),
)); ?>
