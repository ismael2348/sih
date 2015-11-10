<?php
/* @var $this CatalogoCodigosSistemasController */
/* @var $model CatalogoCodigosSistemas */
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#catalogo-codigos-sistemas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>Codigo</span>',array('catalogoCodigosSistemas/create')); ?>
<div class="centrar";>
<h1>Administrador de Codigos</h1>
</div>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'catalogo-codigos-sistemas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','header'=>'<b>Acciones</b>',
		),
		'id',
		'nombre',
		'numero',
		
	),
)); ?>
