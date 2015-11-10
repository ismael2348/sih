<?php
/* @var $this PersonasInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personas Infos',
);

$this->menu=array(
	array('label'=>'Create PersonasInfo', 'url'=>array('create')),
	array('label'=>'Manage PersonasInfo', 'url'=>array('admin')),
);
?>

<h1>Personas Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
