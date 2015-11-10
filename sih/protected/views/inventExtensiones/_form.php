<?php
/* @var $this InventExtensionesController */
/* @var $model InventExtensiones */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->baseUrl;  
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invent-extensiones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>



<div class="row">
		<label>Direcciones IPS</label>
		<select name="InventExtensiones[id_ip]" id="InventExtensiones_id_ip">
		<option></option>
		<?php
			foreach($InventIp as $InventIp)
			{
		?>
		<option value="<?php echo $InventIp->id;?>"><?php echo $InventIp->ip;?></option>
		<?php
			}
		?>
		</select>
	</div>
	<div class="row" style="display:">
	<label>Nombre de el Area </label>
		<select name="InventExtensiones[id_area]" id="InventExtensiones_id_area">
		<option></option>
		<?php
			foreach($Areas as $Areas)
			{
		?>
		<option value="<?php echo $Areas->id;?>"><?php echo $Areas->nombre;?></option>
		<?php
			}
		?>
		</select>
	</div>

	<div class="row" style="display:">
	Tipo de equipo: <span class="required">*</span><br>
	<select name="InventExtensiones[tipo_equipo]" id="InventExtensiones_tipo_equipo">
	<option></option>
	<option>Generic SIP Device</option>
	<option>Generic IAX2 Device</option>
	<option>Generic ZAP Device</option>
	<option>Generic SIP Device</option>
	<option>Generic DAHDI Device</option>
	<option>Otro</option>


	</select>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_ext'); ?>
		<?php echo $form->textField($model,'num_ext'); ?>
		<?php echo $form->error($model,'num_ext'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->