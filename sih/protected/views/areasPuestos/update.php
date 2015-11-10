<?php
/* @var $this AreasPuestosController */
/* @var $model AreasPuestos */

$this->breadcrumbs=array(
	'Areas Puestoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AreasPuestos', 'url'=>array('index')),
	array('label'=>'Create AreasPuestos', 'url'=>array('create')),
	array('label'=>'View AreasPuestos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AreasPuestos', 'url'=>array('admin')),
);
?>

<h1>Actualización de  AreasPuestos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>