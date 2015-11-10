<?php
/* @var $this PuestosController */
/* @var $model Puestos */

$this->breadcrumbs=array(
	'Puestoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Puestos', 'url'=>array('index')),
	array('label'=>'Create Puestos', 'url'=>array('create')),
	array('label'=>'Update Puestos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Puestos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Puestos', 'url'=>array('admin')),
);
?>

<h1>View Puestos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'activo',
	),
)); ?>
