<?php
/* @var $this ClavesTelefonicasController */
/* @var $model ClavesTelefonicas */
?>

<h1>Detalles de la Clave de #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_persona',
		'id_area',
		'clave',
		'nivel',
		'email',
		
	),
)); ?>
