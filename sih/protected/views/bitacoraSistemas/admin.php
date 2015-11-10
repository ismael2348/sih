<?php
/* @var $this BitacoraSistemasController */
/* @var $model BitacoraSistemas */

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



<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br></span>',array('BitacoraSistemas/create')); ?>
<div class="centrar";>
<h1>BITACORA</h1>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bitacora-sistemas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn','template'=>' {view}','header'=>'<b>Acciones</b>',
		),
		'id',
		array(
            'header' => '<b>Prioridad</b>',
            'value' => '$data->idCodigo["nombre"]'
        ),
		array(
            'header' => '<b>Area</b>',
            'value' => '$data->idArea["nombre"]'
        ),
array(
            'header' => '<b>Articulo</b>',
            'value' => '$data->idArt["equipo"]'
        ),

array(
            'header' => '<b>Consumible</b>',
            'value' => '$data->idConsumible["consumible_de"]'
        ),
array(
            'header' => '<b>Persona Reporto</b>',
            'value' => '$data->idPersonaRepo["nombres"]." ".$data->idPersonaRepo["ap_pat"]." ".$data->idPersonaRepo["ap_mat"]'
        ),




		
		'personaAtendio',
		'personaSolu',
		'descripcionSolucion',
		'comentarios',
		
		'fechaCreacionReg',
		'fechaSolucion'
		),
)); ?>
