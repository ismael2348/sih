<?php echo CHtml::link('<span class="botonAccionAdd">Lista de <br> documentos</span>',array('documentos/admin')); ?>
<br><br>

<h1>Detalles del documento:  <div style="color:#65A8A1; display: inline-block"><?php echo $model->nombre; ?></div></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		array(	"name"=>'Vista previa del documento',"type"=>'raw',
    			"value"=>($model['url'] != "" ? "<a href='".$model['url']."' target='_blank'> Ver :D </a>" : "No hay vista previa")),
		'activo',
		'fecha_registro',
	),
)); ?>

