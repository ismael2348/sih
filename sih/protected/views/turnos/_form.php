<?php
/* @var $this TurnosController */
/* @var $model Turnos */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->baseUrl;  
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turnos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php  echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
<!--
	<div class="row">
		<?php /* echo $form->labelEx($model,'horaentrada'); ?>
		<?php echo $form->textField($model,'horaentrada'); ?>
		<?php echo $form->error($model,'horaentrada');  ?>
	</div>
	<div class="row">
			<?php echo $form->labelEx($model,'horasalida'); ?>
		<?php echo $form->textField($model,'horasalida'); ?>
		<?php echo $form->error($model,'horasalida'); */ ?>
	</div>
-->
	<div class="row">
<label for="Turnos_horaentrada" class="required">Hora de entrada<span class="required">*</span></label>
	<select name="Turnos[horaentrada]" id="Turnos_horaentrada">
	<option><?php echo substr($model->horaentrada,0,5); ?></option>
	<option>07:00</option>
	<option>07:00</option>
	<option>07:30</option>
	<option>08:00</option>
	<option>08:30</option>
	<option>09:00</option>
	<option>09:30</option>
	<option>10:00</option>
	<option>10:30</option>
	<option>11:00</option>
	<option>11:30</option>
	<option>12:00</option>
	<option>12:30</option>
	<option>13:00</option>
	<option>13:30</option>
	<option>14:00</option>
	<option>14:30</option>					
	<option>15:00</option>
	<option>15:30</option>	
	<option>16:00</option>
	<option>16:30</option>
	<option>17:00</option>
	<option>17:30</option>
	<option>18:00</option>
	<option>18:30</option>	
	<option>19:00</option>
	<option>20:30</option>
	<option>20:00</option>
	<option>20:30</option>
	<option>21:00</option>
	<option>21:30</option>	
	<option>22:00</option>
	<option>22:30</option>
	<option>23:00</option>
	<option>23:30</option>
	<option>00:00</option>
	<option>00:30</option>	
	<option>01:00</option>
	<option>01:30</option>
	<option>02:00</option>
	<option>02:30</option>
	<option>03:00</option>
	<option>03:30</option>	
	<option>04:00</option>
	<option>04:30</option>
	<option>05:00</option>
	<option>05:30</option>
	<option>06:00</option>
	<option>06:30</option>	
	</select>
</div>

<div class="row">
<label for="Turnos_horasalida" class="required">Hora de salida <span class="required">*</span></label>
	<select name="Turnos[horasalida]" id="Turnos_horasalida">
	<option><?php echo substr($model->horasalida,0,5); ?></option>
	<option>07:00</option>
	<option>07:00</option>
	<option>07:30</option>
	<option>08:00</option>
	<option>08:30</option>
	<option>09:00</option>
	<option>09:30</option>
	<option>10:00</option>
	<option>10:30</option>
	<option>11:00</option>
	<option>11:30</option>
	<option>12:00</option>
	<option>12:30</option>
	<option>13:00</option>
	<option>13:30</option>
	<option>14:00</option>
	<option>14:30</option>					
	<option>15:00</option>
	<option>15:30</option>	
	<option>16:00</option>
	<option>16:30</option>
	<option>17:00</option>
	<option>17:30</option>
	<option>18:00</option>
	<option>18:30</option>	
	<option>19:00</option>
	<option>20:30</option>
	<option>20:00</option>
	<option>20:30</option>
	<option>21:00</option>
	<option>21:30</option>	
	<option>22:00</option>
	<option>22:30</option>
	<option>23:00</option>
	<option>23:30</option>
	<option>00:00</option>
	<option>00:30</option>	
	<option>01:00</option>
	<option>01:30</option>
	<option>02:00</option>
	<option>02:30</option>
	<option>03:00</option>
	<option>03:30</option>	
	<option>04:00</option>
	<option>04:30</option>
	<option>05:00</option>
	<option>05:30</option>
	<option>06:00</option>
	<option>06:30</option>	
	</select>
</div>




	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->