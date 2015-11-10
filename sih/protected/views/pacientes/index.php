<?php
/* @var $this PacientesController */
/* @var $dataProvider CActiveDataProvider */


?>

<h1>Pacientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
