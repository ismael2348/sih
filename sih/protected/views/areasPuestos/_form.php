<?php
/* @var $this AreasPuestosController */
/* @var $model AreasPuestos */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->baseUrl;  
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'areas-puestos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<!--<input name="AreasPuestos[id_area]" id="AreasPuestos_id_area" type="hidden" value="<?php //echo $_GET["id"]; ?>">-->

	<div class="row">
	Nombre del puesto:<br>
	<input size="60" maxlength="250" name="Puestos[nombre]" id="Puestos_nombre" type="text">
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->