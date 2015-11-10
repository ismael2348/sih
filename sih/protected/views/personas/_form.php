<?php
/* @var $this PersonasController */
/* @var $model Personas */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->baseUrl;  
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>
<?php echo $form->errorSummary($model); ?>

<div class="divisor">
	
<!-- forma de personas -->
	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_pat'); ?>
		<?php echo $form->textField($model,'ap_pat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ap_pat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_mat'); ?>
		<?php echo $form->textField($model,'ap_mat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ap_mat'); ?>
	</div>

	<div class="row">
	Fecha de Nacimiento <span class="required">*</span><br>
		<?php
		$fechaMax = date('Y/m/d');

		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'Personas[fecha_nac]',
			'language'=> 'es',
			'value'=>$model->fecha_nac,

		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'1920:2014',
        //'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		    ),

		));

		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nss'); ?>
		<?php echo $form->textField($model,'nss',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nss'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rfc'); ?>
		<?php echo $form->textField($model,'rfc',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curp'); ?>
		<?php echo $form->textField($model,'curp',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'curp'); ?>
	</div>

	<div class="row">
		Sexo <span class="required">*</span><br>
		<select name="Personas[sexo]" id="Personas_sexo">
			<option><?php echo $model->sexo; ?></option><option>MASCULINO</option><option>FEMENINO</option>
		</select>
	</div>

	<div class="row">
		Asegurado? <span class="required">*</span><br>
		<select name="Personas[seguroActivo]" id="Personas_seguroActivo">
			<option><?php echo $model->seguroActivo; ?></option><option>SI</option><option>NO</option>
		</select>
	</div>


	<div class="row">
		Estado Civil <span class="required">*</span><br>
		<select name="Personas[estado_civil]" id="Personas_estado_civil">
			<option><?php echo $model->estado_civil; ?></option><option>SOLTERO</option><option>CASADO</option><option>DIVORCIADO</option><option>VIUDO</option><option>UNIÓN LIBRE</option>
		</select>
	</div>

		<div class="row">
		Escolaridad <span class="required">*</span><br>
		<select name="Personas[escolaridad]" id="Personas_escolaridad">
			<option><?php echo $model->escolaridad; ?></option><option>PRIMARIA</option><option>SECUNDARIA</option><option>PREPARATORIA</option><option>UNIVERSIDAD</option><option>MAESTRIA</option><option>DOCTORADO</option>
		</select>
	</div>




</div>

<div class="divisor">

	<div class="row">
		<?php echo $form->labelEx($personasInfo,'calle_num'); ?>
		<?php echo $form->textField($personasInfo,'calle_num',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($personasInfo,'calle_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($personasInfo,'colonia'); ?>
		<?php echo $form->textField($personasInfo,'colonia',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($personasInfo,'colonia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($personasInfo,'cp'); ?>
		<?php echo $form->textField($personasInfo,'cp',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($personasInfo,'cp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($personasInfo,'municipio'); ?>
		<?php echo $form->textField($personasInfo,'municipio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($personasInfo,'municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($personasInfo,'estado'); ?>
		<?php echo $form->textField($personasInfo,'estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($personasInfo,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($personasInfo,'pais'); ?>
		<?php echo $form->textField($personasInfo,'pais',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($personasInfo,'pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($personasInfo,'email'); ?>
		<?php echo $form->textField($personasInfo,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($personasInfo,'email'); ?>
		<br><span class="notas" onclick="mostrar(this,'mail2')" <?php echo $personasInfo->email2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro correo electónico</span>
	</div>

	<div class="row oculto"  id="mail2" <?php echo $personasInfo->email2!="" ? "style='display:block'" : ""; ?>>
		<?php echo $form->labelEx($personasInfo,'email2'); ?>
		<?php echo $form->textField($personasInfo,'email2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($personasInfo,'email2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($personasInfo,'telefono'); ?>
		<?php echo $form->textField($personasInfo,'telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($personasInfo,'telefono'); ?>
		<br><span class="notas" onclick="mostrar(this,'tel2')" <?php echo $personasInfo->telefono2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro teléfono</span>
	</div>

	<div class="row oculto" id="tel2" <?php echo $personasInfo->telefono2!="" ? "style='display:block'" : ""; ?>>
		<?php echo $form->labelEx($personasInfo,'telefono2'); ?>
		<?php echo $form->textField($personasInfo,'telefono2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($personasInfo,'telefono2'); ?>
	</div>

	<div class="row" >
		<?php echo $form->labelEx($personasInfo,'celular'); ?>
		<?php echo $form->textField($personasInfo,'celular',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($personasInfo,'celular'); ?>
		<br><span class="notas" onclick="mostrar(this,'cel2')" <?php echo $personasInfo->celular2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas"> click para agregar otro celular</span>
	</div>

	<div class="row oculto"  id="cel2" <?php echo $personasInfo->celular2!="" ? "style='display:block'" : ""; ?>>
		<?php echo $form->labelEx($personasInfo,'celular2'); ?>
		<?php echo $form->textField($personasInfo,'celular2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($personasInfo,'celular2'); ?>
	</div>
</div>


<div class="divisor">

	<div class="row">
	Fecha de ingreso <span class="required">*</span><br>
		<?php
		$model->fecha_ingreso = date('d-m-Y');
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'fPersonas[fecha_ingreso]',
			'language'=> 'es',
			'value'=>$model->fecha_ingreso,
		    // additional javascript options for the date picker plugin
		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'1920:2014',
        //'minDate' => '2000-01-01',      // minimum date
        'minDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		    ),

		));

		?>
	</div>


	<div class="row">
		Puesto <span class="required">*</span><br>
		<select name="Personas[id_area_puesto]" id="Personas[id_area_puesto]">
			<?php
				foreach($areas as $llave => $valor){
			?>
			<optgroup label="Área de <?php echo $valor["nombre"]; ?>">
				<?php 
					$ap = AreasPuestos::model()->findAllByAttributes( array('id_area'=>$valor["id"])); 
					foreach($ap as $llaveap => $valorap){
				?>
						<option value="<?php echo $valorap["id"]; ?>" <?php echo $model->id_area_puesto == $valorap["id"] ? "SELECTED": ""; ?>><?php echo $valor["nombre"].": ".Puestos::model()->findByPk($valorap["id_puesto"])->nombre; ?></option>
			<?php
					}
				}
			?>
		</select>
	</div>

	

	<div class="row">
		Turno <span class="required">*</span><br>
		<select name="Personas[id_turno]" id="Personas_id_turno">
		<option></option>
			<?php
				foreach($turnos as $llave => $valor){
			?>
					<option value="<?php echo $valor["id"]; ?>" <?php echo $model->id_turno == $valor["id"] ? "SELECTED": ""; ?>><?php echo $valor["nombre"]; ?></option>
			<?php
				}
			?>
		</select>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>



</div>


<?php $this->endWidget(); ?>

</div><!-- form -->