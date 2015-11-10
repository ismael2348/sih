<?php
/* @var $this PersonasInfoController */
/* @var $model PersonasInfo */

$this->breadcrumbs=array(
	'Personas Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonasInfo', 'url'=>array('index')),
	array('label'=>'Manage PersonasInfo', 'url'=>array('admin')),
);
?>

<h1>Registro de  PersonasInfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>