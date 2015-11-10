<?php
/* @var $this PacientesController */
/* @var $model Pacientes */
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
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apMat'); ?>
		<?php echo $form->textField($model,'apMat',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apPat'); ?>
		<?php echo $form->textField($model,'apPat',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoCivil'); ?>
		<?php echo $form->textField($model,'estadoCivil',array('size'=>15,'maxlength'=>15)); ?>
	</div>



	<div class="row">
		<?php echo $form->label($model,'calleNum'); ?>
		<?php echo $form->textField($model,'calleNum',array('size'=>60,'maxlength'=>100)); ?>
	</div>
		<div class="row">
		<?php echo $form->label($model,'colonia'); ?>
		<?php echo $form->textField($model,'colonia',array('size'=>60,'maxlength'=>100)); ?>
	</div>
		<div class="row">
		<?php echo $form->label($model,'cp'); ?>
		<?php echo $form->textField($model,'cp',array('size'=>60,'maxlength'=>100)); ?>
	</div>
		<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>100)); ?>
	</div>
		<div class="row">
		<?php echo $form->label($model,'pais'); ?>
		<?php echo $form->textField($model,'pais',array('size'=>60,'maxlength'=>100)); ?>
	</div>



	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email2'); ?>
		<?php echo $form->textField($model,'email2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono2'); ?>
		<?php echo $form->textField($model,'telefono2',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular2'); ?>
		<?php echo $form->textField($model,'celular2',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depositoRiesgos'); ?>
		<?php echo $form->textField($model,'depositoRiesgos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'montoDepositado'); ?>
		<?php echo $form->textField($model,'montoDepositado',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->