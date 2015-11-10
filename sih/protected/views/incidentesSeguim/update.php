<?php
/* @var $this IncidentesSeguimController */
/* @var $model IncidentesSeguim */

$this->breadcrumbs=array(
	'Incidentes Seguims'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IncidentesSeguim', 'url'=>array('index')),
	array('label'=>'Create IncidentesSeguim', 'url'=>array('create')),
	array('label'=>'View IncidentesSeguim', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IncidentesSeguim', 'url'=>array('admin')),
);
?>

<h1>Update IncidentesSeguim <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>