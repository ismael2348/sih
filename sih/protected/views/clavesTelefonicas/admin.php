<?php
/* @var $this ClavesTelefonicasController */
/* @var $model ClavesTelefonicas */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#claves-telefonicas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="centrar";>
<h1>Administrador Claves Telefonicas</h1>
</div>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>Clave</span>',array('clavesTelefonicas/create')); ?>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'claves-telefonicas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','header'=>'<b>Acciones</b>',
		),
		'id',
		array(
            'header' => '<b>Persona</b>',
            'value' => array($this,'obtenerPersonas'),'type'=>'raw'
        ),
		array(
            'header' => '<b>Area</b>',
            'value' => array($this,'obtenerAreas'),'type'=>'raw'
        ),
		'clave',
		'nivel',
		'email',
		'fechaCreacion',
		
		
	),
)); ?>
