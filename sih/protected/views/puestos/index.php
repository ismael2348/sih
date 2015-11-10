<?php
/* @var $this PuestosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Puestoses',
);

$this->menu=array(
	array('label'=>'Create Puestos', 'url'=>array('create')),
	array('label'=>'Manage Puestos', 'url'=>array('admin')),
);
?>

<h1>Puestoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
