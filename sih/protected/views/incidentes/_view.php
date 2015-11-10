<?php
/* @var $this IncidentesController */
/* @var $data Incidentes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folio')); ?>:</b>
	<?php echo CHtml::encode($data->folio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('de_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->de_id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('para_id_area')); ?>:</b>
	<?php echo CHtml::encode($data->para_id_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asunto')); ?>:</b>
	<?php echo CHtml::encode($data->asunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cierre')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_cierre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	*/ ?>

</div>