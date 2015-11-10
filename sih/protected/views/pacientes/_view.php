<?php
/* @var $this PacientesController */
/* @var $data Pacientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apMat')); ?>:</b>
	<?php echo CHtml::encode($data->apMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apPat')); ?>:</b>
	<?php echo CHtml::encode($data->apPat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoCivil')); ?>:</b>
	<?php echo CHtml::encode($data->estadoCivil); ?>
	<br />



	<?php /*

		<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />
	
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('depositoRiesgos')); ?>:</b>
	<?php echo CHtml::encode($data->depositoRiesgos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('montoDepositado')); ?>:</b>
	<?php echo CHtml::encode($data->montoDepositado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	*/ ?>

</div>