<?php
/* @var $this AreasPuestosController */
/* @var $model AreasPuestos */

$this->breadcrumbs=array(
	'Areas Puestoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AreasPuestos', 'url'=>array('index')),
	array('label'=>'Create AreasPuestos', 'url'=>array('create')),
	array('label'=>'Update AreasPuestos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AreasPuestos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AreasPuestos', 'url'=>array('admin')),
);
?>

<h1>View AreasPuestos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_area',
		'id_puesto',
		'activo',
	),
)); ?>
