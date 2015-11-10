<?php


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#invent-ip-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de IPs</h1>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar <br>Ip</span>',array('inventIp/create')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'invent-ip-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		//'id',
		array(
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} ','header'=>'<b>Acciones</b>'
		),
		array(
            'header' => '<b>Direccion IP</b>',
            'name' => 'ip'
        ),
		
		
	),
)); ?>
