<?php
/* @var $this InventarioEquipoSistemasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventario Equipo Sistemases',
);

$this->menu=array(
	array('label'=>'Create InventarioEquipoSistemas', 'url'=>array('create')),
	array('label'=>'Manage InventarioEquipoSistemas', 'url'=>array('admin')),
);
?>

<h1>Inventario Equipo Sistemases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
