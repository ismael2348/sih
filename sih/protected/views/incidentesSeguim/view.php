<?php
/* @var $this IncidentesSeguimController */
/* @var $model IncidentesSeguim */

$this->breadcrumbs=array(
	'Incidentes Seguims'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IncidentesSeguim', 'url'=>array('index')),
	array('label'=>'Create IncidentesSeguim', 'url'=>array('create')),
	array('label'=>'Update IncidentesSeguim', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IncidentesSeguim', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IncidentesSeguim', 'url'=>array('admin')),
);
?>

<h1>View IncidentesSeguim #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_usuario',
		'id_incidente',
		'descripcion',
		'fecha_creacion',
		'activo',
	),
)); ?>
