<?php
/* @var $this InventarioEquipoSistemasController */
/* @var $model InventarioEquipoSistemas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventario-equipo-sistemas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<div class="registro">
	<p class="note">Todos los campos son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<select name="EquipoSistemas[id_area]" id="EquipoSistemas_id_area">

		<?php
			foreach($Areas as $Areas)
			{
		?>
		<option value="<?php echo $Areas->id ;?>"><?php echo $Areas->nombre;?></option>
		<?php
			}
		?>
	</select>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipo'); ?>
		<?php echo $form->textField($model,'equipo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'equipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_serie'); ?>
		<?php echo $form->textField($model,'numero_serie',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'numero_serie'); ?>
	</div>

	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>