<?php
/* @var $this InventExtensionesController */
/* @var $data InventExtensiones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ip')); ?>:</b>
	<?php echo CHtml::encode($data->id_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_area')); ?>:</b>
	<?php echo CHtml::encode($data->id_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_equipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_equipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_ext')); ?>:</b>
	<?php echo CHtml::encode($data->num_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reg')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>