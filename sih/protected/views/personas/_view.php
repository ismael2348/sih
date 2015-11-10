<?php
/* @var $this PersonasController */
/* @var $data Personas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ap_pat')); ?>:</b>
	<?php echo CHtml::encode($data->ap_pat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ap_mat')); ?>:</b>
	<?php echo CHtml::encode($data->ap_mat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nac')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nss')); ?>:</b>
	<?php echo CHtml::encode($data->nss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguroActivo')); ?>:</b>
	<?php echo CHtml::encode($data->seguroActivo); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('rfc')); ?>:</b>
	<?php echo CHtml::encode($data->rfc); ?>
	<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('curp')); ?>:</b>
	<?php echo CHtml::encode($data->curp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridad')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_area_puesto')); ?>:</b>
	<?php echo CHtml::encode($data->id_area_puesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_personas_info')); ?>:</b>
	<?php echo CHtml::encode($data->id_personas_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_turno')); ?>:</b>
	<?php echo CHtml::encode($data->id_turno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	*/ ?>

</div>