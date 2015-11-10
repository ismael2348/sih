<?php echo CHtml::link('<span class="botonAccion Back"  style="width:180px;">Gestión de pacientes<br>con Aseguradoras</span>',array('pacientesAseguradora/admin')); ?><br><br>
<?php $paciente = Pacientes::model()->FindByPk($model->id_visita); ?>
<?php $aseguradora = Aseguradoras::model()->FindByPk($model->id_aseguradora); ?>
 
<h1>Detalles del paciente asegurado: <p style="color:#0C91D6; display:inline-block;margin:0;"><?php echo $paciente->apPat." ".$paciente->apMat." ".$paciente->nombre ; ?></p></h1>
<div class="infoX">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'Aseguradora','value'=>$aseguradora->nombre),
		'numeroPoliza',
		'montoAutorizado',
		'deducible',
		'cuaSeguro',
		'exclusiones',
		'atencionAseg',
		'observaciones',
		'fechaAutorizacion',

		
	),
)); ?>
</div>
<div class="infoX">
	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fechaDocumentacionCompleta',
		'folioSinistro',
		'folioRastreo',
		'folioAseguradora',
		'factura',
		'medicoPrincipal',
		'diagnosticoResum',
		'especialidad',
		'montoHospital',
		'montoHonorarios',
		'nombreTratante1',
		'sueldoTratante1',
		'nombreTratante2',
		'sueldoTratante2',
		'nombreInstrument1',
		'sueldoInstrumentist1',
		'nombreInstrument2',
		'sueldoInstrumentist2',
		'nombreAnestesiolog',
		'sueldoAnestesiolog',
		'interconsulta1',
		'nombreDocInter1',
		'cantidad1',
		'interconsulta2',
		'nombreDocInter2',
		'cantidad2',
		'interconsulta3',
		'nombreDocInter3',
		'cantidad3',
		'interconsulta4',
		'nombreDocInter4',
		'cantidad4',
		'interconsulta5',
		'nombreDocInter5',
		'cantidad5',
		'interconsulta6',
		'nombreDocInter6',
		'cantidad6',
		'interconsulta7',
		'nombreDocInter7',
		'cantidad7',
		'Proveedor1',
		'nombreProvee1',
		'cantidadProvee1',
		'Proveedor2',
		'nombreProvee2',
		'cantidadProvee2',
		'Proveedor3',
		'nombreProvee3',
		'cantidadProvee3',
		'Proveedor4',
		'nombreProvee4',
		'cantidadProvee4',

		


		
	),
)); ?>
</div>
<div class="infoX">
	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fechaPagoAseguradora',
		'aseguradoraPagoOk',
		'pagoParcial',
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
	),
)); ?>



</div>
































