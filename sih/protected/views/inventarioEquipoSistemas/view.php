<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Stock</span>',array('inventarioEquipoSistemas/admin')); ?>
	<br><br>
<h1>Detalles de: <?php echo $model->marca." ".$model->modelo." "." [".$model->numero_serie."] "; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',
	 array(
	'data'=>$model,
	'attributes'=>array(
		'id',
array(	"name"=>'Area',
			"value"=>$model->idArea->nombre),
		'equipo',
		'marca',
		'modelo',
		'numero_serie',
		'fecha_reg',
		/*'activo',*/
	),
)); ?>
