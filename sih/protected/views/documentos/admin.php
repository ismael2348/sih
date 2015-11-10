<?php
/* @var $this DocumentosController */
/* @var $model Documentos */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#documentos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br></span>',array('documentos/create')); ?>
<div class="centrar";>
<h1>Documentos</h1>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'documentos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','template'=>' {view}','header'=>'<b>Acciones</b>',
		),
		'nombre',
		

		
		
	),
)); ?>
