<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Consumibles</span>',array('stockImpresora/admin')); ?>
	<br><br>

<h1>Detalles de la impresora #<?php echo $model->id ." ".$model->consumible; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_area',
		'marca',
		'tipo',
		'consumible',
		'stock',
	),
)); ?>
