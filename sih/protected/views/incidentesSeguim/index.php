<?php
/* @var $this IncidentesSeguimController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Incidentes Seguims',
);

$this->menu=array(
	array('label'=>'Create IncidentesSeguim', 'url'=>array('create')),
	array('label'=>'Manage IncidentesSeguim', 'url'=>array('admin')),
);
?>

<h1>Incidentes Seguims</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
