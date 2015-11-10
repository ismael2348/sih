<?php
/* @var $this PacientesAseguradoraController */
/* @var $model PacientesAseguradora */
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
		<?php echo $form->label($model,'id_visita'); ?>
		<?php echo $form->textField($model,'id_visita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_aseguradora'); ?>
		<?php echo $form->textField($model,'id_aseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroPoliza'); ?>
		<?php echo $form->textField($model,'numeroPoliza',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'montoAutorizado'); ?>
		<?php echo $form->textField($model,'montoAutorizado',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deducible'); ?>
		<?php echo $form->textField($model,'deducible',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuaSeguro'); ?>
		<?php echo $form->textField($model,'cuaSeguro',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excluciones'); ?>
		<?php echo $form->textField($model,'excluciones',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaAutorizacion'); ?>
		<?php echo $form->textField($model,'fechaAutorizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaDocumentacionCompleta'); ?>
		<?php echo $form->textField($model,'fechaDocumentacionCompleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPagoAseguradora'); ?>
		<?php echo $form->textField($model,'fechaPagoAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'montoHonorarios'); ?>
		<?php echo $form->textField($model,'montoHonorarios',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'montoHospital'); ?>
		<?php echo $form->textField($model,'montoHospital',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folioSinistro'); ?>
		<?php echo $form->textField($model,'folioSinistro',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folioRastreo'); ?>
		<?php echo $form->textField($model,'folioRastreo',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folioAseguradora'); ?>
		<?php echo $form->textField($model,'folioAseguradora',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aseguradoraPagoOk'); ?>
		<?php echo $form->textField($model,'aseguradoraPagoOk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoPagoAseg'); ?>
		<?php echo $form->textField($model,'tipoPagoAseg',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantPagoAseg'); ?>
		<?php echo $form->textField($model,'cantPagoAseg',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detaPagoAseg'); ?>
		<?php echo $form->textField($model,'detaPagoAseg',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPagoAseg'); ?>
		<?php echo $form->textField($model,'fechaPagoAseg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proveedoresPagoOk'); ?>
		<?php echo $form->textField($model,'proveedoresPagoOk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoPagoProvee'); ?>
		<?php echo $form->textField($model,'tipoPagoProvee',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantPagoProvee'); ?>
		<?php echo $form->textField($model,'cantPagoProvee',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detaPagoProvee'); ?>
		<?php echo $form->textField($model,'detaPagoProvee',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPagoProvee'); ?>
		<?php echo $form->textField($model,'fechaPagoProvee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'honorariosPagoOk'); ?>
		<?php echo $form->textField($model,'honorariosPagoOk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoPagoHonorarios'); ?>
		<?php echo $form->textField($model,'tipoPagoHonorarios',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantPagoHonorarios'); ?>
		<?php echo $form->textField($model,'cantPagoHonorarios',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detaPagoHonorarios'); ?>
		<?php echo $form->textField($model,'detaPagoHonorarios',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPagoHonorarios'); ?>
		<?php echo $form->textField($model,'fechaPagoHonorarios'); ?>
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