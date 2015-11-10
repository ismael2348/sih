<?php
/* @var $this InventarioEquipoSistemasController */
/* @var $model InventarioEquipoSistemas */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inventario-equipo-sistemas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>Equipo</span>',array('InventarioEquipoSistemas/create')); ?>
<div class="centrar";>
<h1>Administrador de Equipos</h1>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventario-equipo-sistemas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','template'=>' {view} {update}','header'=>'<b>Acciones</b>',
		),
		'id',
array(
            'header' => '<b>Area</b>',
            'value' => '$data->idArea["nombre"]'
        ),
		'equipo',
		'marca',
		'modelo',
		'numero_serie',
		'fecha_reg',
		'activo',
		
	),
)); ?>
