<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inventario-consumibles-sistemas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br></span>',array('inventarioConsumiblesSistemas/create')); ?>
<div class="centrar";>
<h1>Inventario</h1>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventario-consumibles-sistemas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','template'=>' {view} {update}','header'=>'<b>Acciones</b>',
		),
		'id',
		'area',
		'consumible_de',
		'marca',
		'modelo',
		'cantidad',
		'tamano',
		'fecha_reg',
		/*'activo',*/
	),
)); ?>
