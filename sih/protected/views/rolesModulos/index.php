<?php
/* @var $this RolesModulosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roles Moduloses',
);

$this->menu=array(
	array('label'=>'Create RolesModulos', 'url'=>array('create')),
	array('label'=>'Manage RolesModulos', 'url'=>array('admin')),
);
?>

<h1>Roles Moduloses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
