<?php
/* @var $this InformacionRespaldosSrvController */
/* @var $model InformacionRespaldosSrv */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informacion-respaldos-srv-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>Respaldo</span>',array('informacionRespaldosSrv/create')); ?>
<div class="centrar";>
<h1>Administrador Respaldos</h1>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'informacion-respaldos-srv-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','header'=>'<b>Acciones</b>',
		),
		/*'id',*/
		'usuario',
		'contrasena',
		'email',
		/*'fechaCreacion',*/
		
	),
)); ?>
