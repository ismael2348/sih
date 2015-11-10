<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->baseUrl;  
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'incidentes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php /* echo $form->labelEx($model,'folio'); ?>
		<?php echo $form->textField($model,'folio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'folio'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'de_id_usuario'); ?>
		<?php echo $form->textField($model,'de_id_usuario'); ?>
		<?php echo $form->error($model,'de_id_usuario'); */ ?>
	</div>
-->

<div class="row">
Área a enviarlos <span class="required">*</span><br>
<?php
	$this->widget('ext.MyAutoComplete', array(
	    'model'=>$model,
	    'attribute'=>'para_id_area',
	    'name'=>'persona_autocomplete',
	    //'id'=>'Peticiones_para',
	    'source'=>$this->createUrl('areas/obtenerAreas'),  // Controller/Action path for action we created in step 4.
	    // additional javascript options for the autocomplete plugin
	    'options'=>array(
	        'minLength'=>'0',
    ),
	));
?>
</div>


	<div class="row">
		<?php echo $form->labelEx($model,'asunto'); ?>
		<?php echo $form->textField($model,'asunto',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'asunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
<!--
	<div class="row">
		<?php /* echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_cierre'); ?>
		<?php echo $form->textField($model,'fecha_cierre'); ?>
		<?php echo $form->error($model,'fecha_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); */ ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->