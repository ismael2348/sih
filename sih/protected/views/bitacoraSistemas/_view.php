<?php
/* @var $this BitacoraSistemasController */
/* @var $data BitacoraSistemas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->id_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_area')); ?>:</b>
	<?php echo CHtml::encode($data->id_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_art')); ?>:</b>
	<?php echo CHtml::encode($data->id_art); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_personaRepo')); ?>:</b>
	<?php echo CHtml::encode($data->id_personaRepo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personaRepo')); ?>:</b>
	<?php echo CHtml::encode($data->personaRepo); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionSolucion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionSolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaSolucion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaSolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacionReg')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacionReg); ?>
	<br />

 

</div>