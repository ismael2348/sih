<?php
/* @var $this InventarioConsumiblesSistemasController */
/* @var $model InventarioConsumiblesSistemas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventario-consumibles-sistemas-form',
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
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumible_de'); ?>
		<?php echo $form->textField($model,'consumible_de',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'consumible_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tamano'); ?>
		<?php echo $form->textField($model,'tamano',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tamano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'cantidad'); ?>
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

	

	<!--<div class="row">
		<p>Fecha de Registro</p>
	<?php /*
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'language'=> 'es',
    'attribute' => 'fecha_reg',
    'htmlOptions' => array(
    			'size' => '10',         
        		'maxlength' => '10', 
        		'placeholder'=>"Fecha de registro"   
    ),
)); */
?>-->


	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); */ ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>