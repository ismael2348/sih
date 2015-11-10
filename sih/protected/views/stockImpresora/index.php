<?php
/* @var $this StockImpresoraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Impresoras',
);

$this->menu=array(
	array('label'=>'Create StockImpresora', 'url'=>array('create')),
	array('label'=>'Manage StockImpresora', 'url'=>array('admin')),
);
?>

<h1>Stock Impresoras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
