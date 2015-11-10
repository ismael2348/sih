<?php
/* @var $this PersonasInfoController */
/* @var $model PersonasInfo */

$this->breadcrumbs=array(
	'Personas Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonasInfo', 'url'=>array('index')),
	array('label'=>'Create PersonasInfo', 'url'=>array('create')),
	array('label'=>'View PersonasInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PersonasInfo', 'url'=>array('admin')),
);
?>

<h1>Actualización de  PersonasInfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>