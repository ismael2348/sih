<?php
/* @var $this IncidentesSeguimController */
/* @var $model IncidentesSeguim */

$this->breadcrumbs=array(
	'Incidentes Seguims'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IncidentesSeguim', 'url'=>array('index')),
	array('label'=>'Manage IncidentesSeguim', 'url'=>array('admin')),
);
?>

<h1>Create IncidentesSeguim</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>