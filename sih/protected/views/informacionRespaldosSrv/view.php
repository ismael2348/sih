<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Respaldos</span>',array('informacionRespaldosSrv/admin')); ?>
	<br><br>
<h1>Detalles de el respaldo de:<?php echo $model->usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuario',
		'contrasena',
		'email',
		'fechaCreacion',
	),
)); ?>


