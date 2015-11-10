<?php
/* @var $this InventIpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invent Ips',
);

$this->menu=array(
	array('label'=>'Crear IP', 'url'=>array('create')),
	//array('label'=>'Manage InventIp', 'url'=>array('admin')),
);
?>

<h1>Inventario Ips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
