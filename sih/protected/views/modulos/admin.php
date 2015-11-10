<?php
/* @var $this ModulosController */
/* @var $model Modulos */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#modulos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<br><br>
<h1>Gestión de Modulos</h1>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar <br>Modulo</span>',array('modulos/create')); ?>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>	

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'modulos-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		//'id',
		array(
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} ','header'=>'<b>Acciones</b>'
		),
		array(
            'header' => '<b>Nombre del Modulo</b>',
            'name' => 'nombre'
        ),
		//'activo',
		
	),
)); ?>
