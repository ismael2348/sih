<?php
/* @var $this StockImpresoraController */
/* @var $model StockImpresora */
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bitacora-sistemas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>consumible</span>',array('stockImpresora/create')); ?>
<div class="centrar";>
<h1>INVENTARIO DE CONSUMIBLES</h1>
</div>
<br>
<br>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div style="border:0px solid red;overflow:hidden;width:100%;">
<div style="margin-left:500px;background-color:#8FDE62;width:40px;height:20px;float:left;"></div> <div style="float:left;">Bien</div>
<div style="margin-left:50px;background-color:#DDD963;width:40px;height:20px;float:left;"></div> <div style="float:left;">Surtir</div>
<div style="margin-left:70px;background-color:#FB0601;width:40px;height:20px;float:left;"></div> <div style="float:left;">Agotado</div>

</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-impresora-grid',
	'dataProvider'=>$model->search(),
	'rowCssClassExpression'=>'$data->stock < "2" ? "agotado" : ($data->stock == 2 ? "surtir" : "bien")',
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','template'=>'{update} {view}', 'header'=>'<b>Acciones</b>',
		),
		'id',
		array(
            'header' => '<b>Area</b>',
            'value' => '$data->idArea["nombre"]'
        ),
		//'id_area',
		'marca',
		'tipo',
		'consumible',
		'stock',
		
	),
)); ?>
