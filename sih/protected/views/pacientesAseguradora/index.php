<?php
/* @var $this PacientesAseguradoraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pacientes Aseguradoras',
);

$this->menu=array(
	array('label'=>'Create PacientesAseguradora', 'url'=>array('create')),
	array('label'=>'Manage PacientesAseguradora', 'url'=>array('admin')),
);
?>

<h1>Pacientes Aseguradoras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
