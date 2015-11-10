<?php
/* @var $this InventExtensionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invent Extensiones',
);

$this->menu=array(
	array('label'=>'Create InventExtensiones', 'url'=>array('create')),
	array('label'=>'Manage InventExtensiones', 'url'=>array('admin')),
);
?>

<h1>Invent Extensiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
