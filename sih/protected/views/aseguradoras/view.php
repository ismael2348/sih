<?php echo CHtml::link('<span class="botonAccion Back">Regresar</span>',array('aseguradoras/admin')); ?>	
<br><br>
<h1>Detalles de Aseguradora: <p style="color:#0C91D6; display:inline-block;margin:0;"><?php echo $model->nombre; ?></p></h1>
<div class="infoX">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'nombre',
		'direccion',
		'domicilioFiscal',
		'rfc',
		'email',
		'email2',
		'telefono',
		'telefono2',
		'celular',
		'celular2',
		//'direccionWeb',
		//'observaciones',
		//'fecha_reg',
		//'activo',
	),
)); ?>
</div>
<div class="infoX">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'nombre',
		//'direccion',
		//'domicilioFiscal',
		//'rfc',
		//'email',
		//'email2',
		//'telefono',
		//'telefono2',
		//'celular',
		//'celular2',
		'direccionWeb',
		'observaciones',
		//'fecha_reg',
		//'activo',
	),
)); ?>
</div>
<div class="infoX">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'nombre',
		//'direccion',
		//'domicilioFiscal',
		//'rfc',
		//'email',
		//'email2',
		//'telefono',
		//'telefono2',
		//'celular',
		//'celular2',
		//'direccionWeb',
		//'observaciones',
		'fecha_reg',
		'activo',
	),
)); ?>
</div>

