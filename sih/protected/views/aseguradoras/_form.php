<?php
/* @var $this AseguradorasController */
/* @var $model Aseguradoras */
/* @var $form CActiveForm */

$baseUrl = Yii::app()->baseUrl;  
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aseguradoras-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con  <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="forms">
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

		<div class="row">
		<?php echo $form->labelEx($model,'domicilioFiscal'); ?>
		<?php echo $form->textField($model,'domicilioFiscal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'domicilioFiscal'); ?>
		</div>
		<div class="row">

		<?php echo $form->labelEx($model,'rfc'); ?>
		<?php echo $form->textField($model,'rfc',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'rfc'); ?>
		</div>
		</div>

		<div class="forms">
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div>

		<div class="row">
		<?php echo $form->labelEx($model,'email2'); ?>
		<?php echo $form->textField($model,'email2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email2'); ?>
		</div>
		<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono'); ?>
		</div>

		<div class="row">	
		<?php echo $form->labelEx($model,'telefono2'); ?>
		<?php echo $form->textField($model,'telefono2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono2'); ?>
		</div>

		<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'celular'); ?>
		</div>

		<div class="row">
		<?php echo $form->labelEx($model,'celular2'); ?>
		<?php echo $form->textField($model,'celular2',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'celular2'); ?>
		</div>
		</div>
		<div class="forms">
		<div class="row">
		<?php echo $form->labelEx($model,'direccionWeb'); ?>
		<?php echo $form->textField($model,'direccionWeb',array('size'=>20,'maxlength'=>20)); ?>
		</div>

		<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>15,'cols'=>100,'size'=>20,'style'=>'resize:none' )); ?>
		<?php echo $form->error($model,'observaciones'); ?>
		</div>
		
		

			
	
		<seccion class="botones";>	
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
		</seccion>
		</div>
		<?php $this->endWidget(); ?>
	</div><!-- form -->