<?php
/* @var $this ClavesTelefonicasController */
/* @var $model ClavesTelefonicas */
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
		<?php echo $form->label($model,'id_persona'); ?>
		<?php echo $form->textField($model,'id_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_area'); ?>
		<?php echo $form->textField($model,'id_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clave'); ?>
		<?php echo $form->textField($model,'clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p1'); ?>
		<?php echo $form->textField($model,'p1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p2'); ?>
		<?php echo $form->textField($model,'p2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p3'); ?>
		<?php echo $form->textField($model,'p3',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p4'); ?>
		<?php echo $form->textField($model,'p4',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p5'); ?>
		<?php echo $form->textField($model,'p5',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->