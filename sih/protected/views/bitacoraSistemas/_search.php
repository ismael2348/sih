<?php
/* @var $this BitacoraSistemasController */
/* @var $model BitacoraSistemas */
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
		<?php echo $form->label($model,'id_codigo'); ?>
		<?php echo $form->textField($model,'id_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_area'); ?>
		<?php echo $form->textField($model,'id_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_art'); ?>
		<?php echo $form->textField($model,'id_art'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_personaRepo'); ?>
		<?php echo $form->textField($model,'id_personaRepo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personaAtendio'); ?>
		<?php echo $form->textField($model,'personaAtendio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personaSolu'); ?>
		<?php echo $form->textField($model,'personaSolu'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model,'descripcionSolucion'); ?>
		<?php echo $form->textField($model,'descripcionSolucion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentarios'); ?>
		<?php echo $form->textField($model,'comentarios',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaSolucion'); ?>
		<?php echo $form->textField($model,'fechaSolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCreacionReg'); ?>
		<?php echo $form->textField($model,'fechaCreacionReg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->