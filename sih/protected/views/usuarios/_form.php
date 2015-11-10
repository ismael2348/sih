<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->baseUrl;  
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); 

?>


<div class="row">
Nombre del empleado:<br>
<?php
	$this->widget('ext.MyAutoComplete', array(
	    'model'=>$model,
	    'attribute'=>'id_persona',
	    'name'=>'persona_autocomplete',
	    //'id'=>'Peticiones_para',
	    'source'=>$this->createUrl('personas/obtenerPersonas'),  // Controller/Action path for action we created in step 4.
	    // additional javascript options for the autocomplete plugin
	    'options'=>array(
	        'minLength'=>'0',
    ),
	));
?>
</div>


<div class="row">
Rol:<br>
<?php
	$this->widget('ext.MyAutoComplete', array(
	    'model'=>$model,
	    'attribute'=>'id_rol',
	    'name'=>'rol_autocomplete',
	    //'id'=>'Peticiones_para',
	    'source'=>$this->createUrl('roles/obtenerRoles'),  // Controller/Action path for action we created in step 4.
	    // additional javascript options for the autocomplete plugin
	    'options'=>array(
	        'minLength'=>'0',
    ),
	));
?>
</div>





	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
	Fecha de Expiración <span class="required">*</span><br>
		<?php
		$fechaMax = date('Y/m/d');

		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'Usuarios[fecha_expiracion]',
			'language'=> 'es',
			'value'=>$model->fecha_expiracion,

		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2014:2020',
        //'minDate' => '2000-01-01',      // minimum date
        //'maxDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		    ),

		));

		?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->