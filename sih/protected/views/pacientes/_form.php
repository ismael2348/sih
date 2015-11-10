<?php
/* @var $this PacientesController */
/* @var $model Pacientes */
/* @var $form CActiveForm */

$baseUrl = Yii::app()->baseUrl; 
 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pacientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
<div style="float:left;width:320px;">
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apPat'); ?>
		<?php echo $form->textField($model,'apPat',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'apPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apMat'); ?>
		<?php echo $form->textField($model,'apMat',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'apMat'); ?>
	</div>

	<div class="row" style="display:">
	Sexo: <span class="required">*</span><br>
	<select name="Pacientes[sexo]" id="Pacientes_sexo">
		<option><?php echo $model->sexo; ?></option>
		<option>MASCULINO</option>
		<option>FEMENINO</option>
	</select>
</div>
	<div class="row" style="display:">
	Estado Civil: <span class="required">*</span><br>
	<select name="Pacientes[estadoCivil]" id="Pacientes_estadoCivil">
		<option><?php echo $model->estadoCivil; ?></option>
			<option>SOLTERO</option>
			<option>CASADO</option>
			<option>DIVORCIADO</option>
			<option>VIUDO</option>
			<option>UNIÓN LIBRE</option>
	</select>

</div>
<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>
</div>



<div style="float:left;width:320px;">
	<div class="row">
		<?php echo $form->labelEx($model,'calleNum'); ?>
		<?php echo $form->textField($model,'calleNum',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'calleNum'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'colonia'); ?>
		<?php echo $form->textField($model,'colonia',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'colonia'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'cp'); ?>
		<?php echo $form->textField($model,'cp',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cp'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'municipio'); ?>
		<?php echo $form->textField($model,'municipio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'municipio'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pais'); ?>
		<?php echo $form->textField($model,'pais',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pais'); ?>
	</div>
</div>

<div style="float:left;width:320px;">
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
		<br><span class="notas" onclick="mostrar(this,'mail2')" <?php echo $model->email2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro email.</span>
	</div>

	<div class="row oculto"  id="mail2" <?php echo $model->email2!="" ? "style='display:block'" : ""; ?>>
		<?php echo $form->labelEx($model,'email2'); ?>
		<?php echo $form->textField($model,'email2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email2'); ?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono'); ?>
		<br><span class="notas" onclick="mostrar(this,'telefono2')" <?php echo $model->telefono2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro telèfono.</span>
	</div>

	<div class="row oculto"  id="telefono2" <?php echo $model->telefono2!="" ? "style='display:block'" : ""; ?>>
		<?php echo $form->labelEx($model,'telefono2'); ?>
		<?php echo $form->textField($model,'telefono2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'telefono2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'celular'); ?>
		<br><span class="notas" onclick="mostrar(this,'cel2')" <?php echo $model->celular2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro celular.</span>
	</div>

	<div class="row oculto"  id="cel2" <?php echo $model->celular2!="" ? "style='display:block'" : ""; ?>>
		<?php echo $form->labelEx($model,'celular2'); ?>
		<?php echo $form->textField($model,'celular2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'celular2'); ?>
	</div>
</div>

<div style="float:left;width:320px;">
	<div class="row">
		<div class="row" style="display:">
	¿Realizó deposito de riesgos?: <span class="required">*</span><br>
	
	<input type="checkbox" name="Pacientes[depositoRiesgos]" id="Pacientes_depositoRiesgos" value="1" onclick="mostrarDeposito()" <?php echo $model->depositoRiesgos == '1' ? "checked" : ""; ?> <?php echo !$model->isNewRecord ? "disabled" : ""; ?>> SI


	</div>
	<br>
	</div>

	<div style="display: <?php echo $model->depositoRiesgos == '1' ? "block" : "none"; ?>;" class="row" id="monto" >
		<?php echo $form->labelEx($model,'montoDepositado'); ?>$
		<?php echo $form->textField($model,'montoDepositado',array('size'=>5,'maxlength'=>20,'style'=>'width:90px;','readonly'=>(!empty($model->montoDepositado) ? true : false))); ?>M/N
		<?php echo $form->error($model,'montoDepositado'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<!-- id-> Pacientes_montoDepositado-->