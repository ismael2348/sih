<?php
/* @var $this TurnosController */
/* @var $model Turnos */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#turnos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Turnos</h1>

<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>turno</span>',array('turnos/create')); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'turnos-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		array(
			
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} {view} ','header'=>'<b>Acciones</b>',
		),
		//'id',
		'nombre',
		'horaentrada',
		'horasalida',
		//'activo',

	),
)); ?>
