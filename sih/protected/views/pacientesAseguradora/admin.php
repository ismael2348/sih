<?php
/* @var $this PacientesAseguradoraController */
/* @var $model PacientesAseguradora */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pacientes-aseguradora-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion de Pacientes con Aseguradora</h1>

<!-- <?php /**echo CHtml::link('BUSQUEDA','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); */ ?>
</div>-->

<div style="border:0px solid red;overflow:hidden;width:400px;">
<div style="background-color:#8FDE62;width:40px;height:20px;float:left;"></div> <div style="float:left;">Finalizados</div>
<div style="margin-left:50px;background-color:#DDD963;width:40px;height:20px;float:left;"></div> <div style="float:left;">Pendientes</div>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pacientes-aseguradora-grid',
	'dataProvider'=>$model->search(),
		'rowCssClassExpression'=>'($data->fechaFin !="0000-00-00 00:00")? "terminada" : "pendiente"',
'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
			'class'=>'CButtonColumn', 'template'=>'{update} {view} ','header'=>'<b>Acciones</b>',
				'buttons'=>array(
                    'update' => array(
                        'label'=>'update', 
                         'visible'=>'($data->fechaFin =="0000-00-00 00:00")',
                    ),
            	),
		),


		'folio',
		array(
			'header' => '<b>NOMBRE DEL PACIENTE</b>',
			'value' => array($this,'obtenerPaciente'),'type'=>'raw'
		),
		array(
			'header' => '<b>ASEGURADORA</b>',
			'value' => array($this,'obtenerAseguradora'),'type'=>'raw'
		),
			'numeroPoliza',
			'montoAutorizado',
			'factura',
			'fechaCreacion',
			'fechaFin',
		/*	
			'deducible',
			'cuaSeguro',
			'excluciones',
			'observaciones',
			'fechaAutorizacion',
			'fechaDocumentacionCompleta',
			'fechaPagoAseguradora',
			'montoHonorarios',
			'montoHospital',
			'folioSinistro',
			'folioRastreo',
			'folioAseguradora',
			'aseguradoraPagoOk',

			'tipoPagoAseg',
			'cantPagoAseg',
			'detaPagoAseg',

			'fechaPagoAseg',
			'proveedoresPagoOk',
			'tipoPagoProvee',

			'cantPagoProvee',
			'detaPagoProvee',
			'fechaPagoProvee',
			'honorariosPagoOk',
			'tipoPagoHonorarios',
			'cantPagoHonorarios',

			'detaPagoHonorarios',
			'fechaPagoHonorarios',
			'fechaCreacion',
			*/

	),
)); ?>

