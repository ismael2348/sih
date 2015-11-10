<?php
/* @var $this RolesModulosController */
/* @var $model RolesModulos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rol'); ?>
		<?php echo $form->textField($model,'id_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_modulo'); ?>
		<?php echo $form->textField($model,'id_modulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permisos'); ?>
		<?php echo $form->textField($model,'permisos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->