<?php
/* @var $this InformacionRespaldosSrvController */
/* @var $model InformacionRespaldosSrv */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacion-respaldos-srv-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="registro">
	<p class="note">Todos los campos son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>