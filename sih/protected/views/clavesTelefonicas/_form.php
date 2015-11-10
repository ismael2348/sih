<?php
/* @var $this ClavesTelefonicasController */
/* @var $model ClavesTelefonicas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'claves-telefonicas-form',
	'enableAjaxValidation'=>false,
)); ?>

<div class="registro">
	<p class="note">Todos los campos son requerido.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<label>Empleado</label>
		<select name="ClavesTelefonicas[id_persona]" id="ClavesTelefonicas_id_persona">
		<option></option>
		<?php
			foreach($Personaslist as $Personal)
			{
		?>
		<option value="<?php echo $Personal->id;?>"><?php echo $Personal->nombres." ".$Personal->ap_pat." ".$Personal->ap_mat;?></option>
		<?php
			}
		?>
		</select>
	</div>


	
	<div class="row">
		<label>Area</label>
		<select name="ClavesTelefonicas[id_area]" id="ClavesTelefonicas_id_area">
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

	

	<div class="row">
		Nivel:<br>
		<select name="ClavesTelefonicas[nivel]" id="ClavesTelefonicas_nivel">
			<option></option>
			<option value="1">1---->(L)(CL)(LDN)(CLN)(LDI)</option>
			<option value="2">2---->(L)(CL)(LDN)(CLN)</option>
			<option value="3">3---->(L)(CL)(LDN)</option>
			<option value="4">4---->(L)(CL)</option>
			<option value="5">5---->(L)</option>
		</select>

	</div>
 	<div class="row">
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave'); ?>
		<?php echo $form->error($model,'clave'); ?>
	</div>
 <!--
	<div class="row">
		<?php /*echo $form->labelEx($model,'p1'); ?>
		<?php echo $form->textField($model,'p1',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'p1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p2'); ?>
		<?php echo $form->textField($model,'p2',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'p2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p3'); ?>
		<?php echo $form->textField($model,'p3',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'p3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p4'); ?>
		<?php echo $form->textField($model,'p4',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'p4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p5'); ?>
		<?php echo $form->textField($model,'p5',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'p5'); */ ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>