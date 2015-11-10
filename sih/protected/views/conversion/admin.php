<?php
/* @var $this ConversionController */
/* @var $model Conversion */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#conversion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="centrar";>
<h1>Creacion de conversión</h1>
</div>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>conversión</span>',array('conversion/create')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'conversion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','header'=>'<b>Acciones</b>',
		),
		//'id',
		'nombre_chopo',
		'nombre_siloe',
		//'activo',
		//'fecha_creacion',
	),
)); ?>
