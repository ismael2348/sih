<?php
/* @var $this ConversionController */
/* @var $model Conversion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conversion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_chopo'); ?>
		<?php echo $form->textField($model,'nombre_chopo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_chopo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_siloe'); ?>
		<?php echo $form->textField($model,'nombre_siloe',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_siloe'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->