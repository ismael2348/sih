<?php
/* @var $this PersonasInfoController */
/* @var $model PersonasInfo */

$this->breadcrumbs=array(
	'Personas Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PersonasInfo', 'url'=>array('index')),
	array('label'=>'Create PersonasInfo', 'url'=>array('create')),
	array('label'=>'Update PersonasInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PersonasInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonasInfo', 'url'=>array('admin')),
);
?>

<h1>View PersonasInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'calle_num',
		'colonia',
		'cp',
		'municipio',
		'estado',
		'pais',
		'email',
		'email2',
		'telefono',
		'telefono2',
		'celular',
		'celular2',
		'activo',
	),
)); ?>
