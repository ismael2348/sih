<?php
/* @var $this TurnosController */
/* @var $data Turnos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaentrada')); ?>:</b>
	<?php echo CHtml::encode($data->horaentrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horasalida')); ?>:</b>
	<?php echo CHtml::encode($data->horasalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>