<?php
/* @var $this RolesModulosController */
/* @var $model RolesModulos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'roles-modulos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<div class="row">
Modulo:<br>
<?php
	$this->widget('ext.MyAutoComplete', array(
	    'model'=>$model,
	    'attribute'=>'id_modulo',
	    'name'=>'modulo_autocomplete',
	    //'id'=>'Peticiones_para',
	    'source'=>$this->createUrl('modulos/obtenerModulos'),  // Controller/Action path for action we created in step 4.
	    // additional javascript options for the autocomplete plugin
	    'options'=>array(
	        'minLength'=>'0',
    ),
	));
?>
</div>



	<div class="row">
	Permisos:<br>
	<label><input type="checkbox" name="ver" id="ver" value="1" /> VER</label><br/> 
	<label><input type="checkbox" name="crear" id="crear" value="1" /> CREAR</label><br/>
	<label><input type="checkbox" name="actualizar" id="actualizar" value="1" /> ACTUALIZAR</label><br/>
	<label><input type="checkbox" name="borrar" id="borrar" value="1" /> BORRAR</label>
		<?php /* echo $form->labelEx($model,'permisos'); ?>
		<?php echo $form->textField($model,'permisos'); ?>
		<?php echo $form->error($model,'permisos'); */ ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->