<?php echo CHtml::link('<span class="botonAccionAdd">Lista de Extenciones</span>',array('inventExtensiones/admin')); ?>

<h1>Detalles de la Extencion  -[#<?php echo $model->num_ext; ?>]-</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(	"name"=>'Direccion IP',
				"value"=>$model->idIp->ip),
		array(	"name"=>'Area',
				"value"=>$model->idArea->nombre),	
		'tipo_equipo',
		'num_ext',
		array(	"name"=>'Fecha y Hora de Creacion',
				"value"=>$model->fecha_reg),
		'activo',
	),
)); ?>
