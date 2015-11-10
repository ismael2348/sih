<?php
/* @var $this PersonasInfoController */
/* @var $data PersonasInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calle_num')); ?>:</b>
	<?php echo CHtml::encode($data->calle_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colonia')); ?>:</b>
	<?php echo CHtml::encode($data->colonia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipio')); ?>:</b>
	<?php echo CHtml::encode($data->municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais')); ?>:</b>
	<?php echo CHtml::encode($data->pais); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email2')); ?>:</b>
	<?php echo CHtml::encode($data->email2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono2')); ?>:</b>
	<?php echo CHtml::encode($data->telefono2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular2')); ?>:</b>
	<?php echo CHtml::encode($data->celular2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	*/ ?>

</div>