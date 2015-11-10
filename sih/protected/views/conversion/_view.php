<?php
/* @var $this ConversionController */
/* @var $data Conversion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_chopo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_chopo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_siloe')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_siloe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />


</div>