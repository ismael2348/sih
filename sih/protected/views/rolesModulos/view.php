<?php
/* @var $this RolesModulosController */
/* @var $model RolesModulos */

$this->breadcrumbs=array(
	'Roles Moduloses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RolesModulos', 'url'=>array('index')),
	array('label'=>'Create RolesModulos', 'url'=>array('create')),
	array('label'=>'Update RolesModulos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RolesModulos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolesModulos', 'url'=>array('admin')),
);
?>

<h1>View RolesModulos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_rol',
		'id_modulo',
		'activo',
		'permisos',
	),
)); ?>
