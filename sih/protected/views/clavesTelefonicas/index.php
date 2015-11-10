<?php
/* @var $this ClavesTelefonicasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Claves Telefonicases',
);

$this->menu=array(
	array('label'=>'Create ClavesTelefonicas', 'url'=>array('create')),
	array('label'=>'Manage ClavesTelefonicas', 'url'=>array('admin')),
);
?>

<h1>Claves Telefonicases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
