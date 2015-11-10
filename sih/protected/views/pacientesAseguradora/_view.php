<?php
/* @var $this PacientesAseguradoraController */
/* @var $data PacientesAseguradora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_visita')); ?>:</b>
	<?php echo CHtml::encode($data->id_visita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aseguradora')); ?>:</b>
	<?php echo CHtml::encode($data->id_aseguradora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroPoliza')); ?>:</b>
	<?php echo CHtml::encode($data->numeroPoliza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('montoAutorizado')); ?>:</b>
	<?php echo CHtml::encode($data->montoAutorizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deducible')); ?>:</b>
	<?php echo CHtml::encode($data->deducible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuaSeguro')); ?>:</b>
	<?php echo CHtml::encode($data->cuaSeguro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('excluciones')); ?>:</b>
	<?php echo CHtml::encode($data->excluciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAutorizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAutorizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDocumentacionCompleta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDocumentacionCompleta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPagoAseguradora')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPagoAseguradora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('montoHonorarios')); ?>:</b>
	<?php echo CHtml::encode($data->montoHonorarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('montoHospital')); ?>:</b>
	<?php echo CHtml::encode($data->montoHospital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folioSinistro')); ?>:</b>
	<?php echo CHtml::encode($data->folioSinistro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folioRastreo')); ?>:</b>
	<?php echo CHtml::encode($data->folioRastreo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folioAseguradora')); ?>:</b>
	<?php echo CHtml::encode($data->folioAseguradora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aseguradoraPagoOk')); ?>:</b>
	<?php echo CHtml::encode($data->aseguradoraPagoOk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPagoAseg')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPagoAseg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantPagoAseg')); ?>:</b>
	<?php echo CHtml::encode($data->cantPagoAseg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detaPagoAseg')); ?>:</b>
	<?php echo CHtml::encode($data->detaPagoAseg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPagoAseg')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPagoAseg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proveedoresPagoOk')); ?>:</b>
	<?php echo CHtml::encode($data->proveedoresPagoOk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPagoProvee')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPagoProvee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantPagoProvee')); ?>:</b>
	<?php echo CHtml::encode($data->cantPagoProvee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detaPagoProvee')); ?>:</b>
	<?php echo CHtml::encode($data->detaPagoProvee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPagoProvee')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPagoProvee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('honorariosPagoOk')); ?>:</b>
	<?php echo CHtml::encode($data->honorariosPagoOk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPagoHonorarios')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPagoHonorarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantPagoHonorarios')); ?>:</b>
	<?php echo CHtml::encode($data->cantPagoHonorarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detaPagoHonorarios')); ?>:</b>
	<?php echo CHtml::encode($data->detaPagoHonorarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPagoHonorarios')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPagoHonorarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacion); ?>
	<br />

	*/ ?>

</div>