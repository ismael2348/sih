<?php
/* @var $this AreasPuestosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Areas Puestoses',
);

$this->menu=array(
	array('label'=>'Create AreasPuestos', 'url'=>array('create')),
	array('label'=>'Manage AreasPuestos', 'url'=>array('admin')),
);
?>

<h1>Areas Puestoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
