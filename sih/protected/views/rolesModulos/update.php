<?php
/* @var $this RolesModulosController */
/* @var $model RolesModulos */

$this->breadcrumbs=array(
	'Roles Moduloses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolesModulos', 'url'=>array('index')),
	array('label'=>'Create RolesModulos', 'url'=>array('create')),
	array('label'=>'View RolesModulos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RolesModulos', 'url'=>array('admin')),
);
?>

<h1>Actualización de  RolesModulos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>