<?php
/* @var $this ModulosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Moduloses',
);

$this->menu=array(
	array('label'=>'Create Modulos', 'url'=>array('create')),
	array('label'=>'Manage Modulos', 'url'=>array('admin')),
);
?>

<h1>Moduloses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
