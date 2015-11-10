<?php
/* @var $this ClavesTelefonicasController */
/* @var $data ClavesTelefonicas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_persona')); ?>:</b>
	<?php echo CHtml::encode($data->id_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_area')); ?>:</b>
	<?php echo CHtml::encode($data->id_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p1')); ?>:</b>
	<?php echo CHtml::encode($data->p1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p2')); ?>:</b>
	<?php echo CHtml::encode($data->p2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p3')); ?>:</b>
	<?php echo CHtml::encode($data->p3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4')); ?>:</b>
	<?php echo CHtml::encode($data->p4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5')); ?>:</b>
	<?php echo CHtml::encode($data->p5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacion); ?>
	<br />

	*/ ?>

</div>