<?php
/* @var $this PuestosController */
/* @var $model Puestos */

$this->breadcrumbs=array(
	'Puestoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Puestos', 'url'=>array('index')),
	array('label'=>'Create Puestos', 'url'=>array('create')),
	array('label'=>'View Puestos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Puestos', 'url'=>array('admin')),
);
?>

<h1>Actualización de  Puestos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>