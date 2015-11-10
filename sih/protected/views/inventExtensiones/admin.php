<?php


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#invent-extensiones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion de Extenciones</h1>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>Extensión</span>',array('inventExtensiones/create')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'invent-extensiones-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array(
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} {view}','header'=>'<b>Acciones</b>'),
		
		array(
            'header' => '<b>Direccion IP</b>',
            'value' => array($this,'direccionIp'),'type'=>'raw'
        ),
		array(
            'header' => '<b>Area</b>',
            'value' => array($this,'obtenerArea'),'type'=>'raw'
        ),
		array(
            'header' => '<b>Tipo de Tecnologia</b>',
            'value' => $model->tipo_equipo,
        	'name' =>'tipo_equipo'	
        	),
		array(
            'header' => '<b>Numero de la Extencion</b>',
            'value' =>  $model->num_ext,
            'name' =>	'num_ext'
        ),
		//'fecha_reg',
		/*
		'activo',
		*/
		
	),
)); ?>
