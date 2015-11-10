<?php
/* @var $this BitacoraSistemasController */
/* @var $model BitacoraSistemas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bitacora-sistemas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="registro">
		<p class="note">Todos los campos son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		Codigos<span class="required">*</span><br> 
		<select name="BitacoraSistemas[id_codigo]" id="BitacoraSistemas_id_codigo">
		<option></option>
		<?php
			foreach($CatalogoCodigosSistemas as $codigos)
			{
		?>
		<option value="<?php echo $codigos->id ;?>"><?php echo $codigos->nombre;?></option>
		<?php
			}
		?>
		</select>
	</div>

	<div class="row">
		Area<span class="required">*</span><br>
		<select name="BitacoraSistemas[id_area]" id="BitacoraSistemas_id_area">
		<option></option>
		<?php
			foreach($Areas as $Areas)
			{
		?>
		<option value="<?php echo $Areas->id ;?>"><?php echo $Areas->nombre;?></option>
		<?php
			}
		?>
		</select>
	</div>


	<div class="row">
		Consumible<br>
		<select name="BitacoraSistemas[id_consumible]" id="BitacoraSistemas_id_consumible">
		<option></option>
		<?php
			
			foreach($InventarioConsumiblesSistemas as $Consumibles)
			{
		?>
		<option value="<?php echo $Consumibles->id ;?>"><?php echo $Consumibles->area." ".$Consumibles->modelo;?></option>
		<?php
			}
		?>
		</select>
	</div>


	<div class="row">
		Equipo<br>
		<select name="BitacoraSistemas[id_art]" id="BitacoraSistemas_id_art">
		<option></option>
		<?php
			$InventarioEquipoSistemas = InventarioEquipoSistemas::model()->findAll();
			var_dump($InventarioEquipoSistemas);
			foreach($InventarioEquipoSistemas as $Equipos)
			{
		?>
		<option value="<?php echo $Equipos->id ;?>"><?php echo $Equipos->equipo." ".$Equipos->modelo;?></option>
		<?php
			}
		?>
		</select>
	</div>


	<div class="row">
		Reporto<span class="required">*</span><br>
		<select name="BitacoraSistemas[id_personaRepo]" id="BitacoraSistemas_id_personaRepo">
		<option></option>
		<?php
			foreach($Personas as $Personas)
			{
		?>
		<option value="<?php echo $Personas->id;?>"><?php echo $Personas->nombres." ".$Personas->ap_pat." ".$Personas->ap_mat;?></option>
		<?php
			}
		?>
		</select>
	</div>

	<div class="row">
		Atendio<span class="required">*</span><br>
		<select name="BitacoraSistemas[personaAtendio]" id="BitacoraSistemas_personaAtendio">
			<option> </option>
			<option value="Ismael Gonzalez">Ismael Gonzalez</option>
			<option value="Arturo Cabrera">Arturo Cabrera</option>
			<option value="Daniel Hiramm">Daniel Hiramm</option>
			<option value="Raquel Moreno">Raquel Moreno</option>
		</select>
	</div>

	<div class="row">
		Soluciono<span class="required">*</span><br>
		<select name="BitacoraSistemas[personaSolu]" id="BitacoraSistemas_personaSolu">
			<option> </option>
			<option value="Ismael Gonzalez">Ismael Gonzalez</option>
			<option value="Arturo Cabrera">Arturo Cabrera</option>
			<option value="Daniel Hiramm">Daniel Hiramm</option>
			<option value="Raquel Moreno">Raquel Moreno</option>
		</select>
	</div>

	<div class="row">
		<span class="required">*</span><br>
		<?php echo $form->labelEx($model,'descripcionSolucion'); ?>
		<?php echo $form->textArea($model,'descripcionSolucion',array('placeholder'=>'Descripcion de la Incidencia','size'=>35,'rows'=>15,'cols'=>100,'maxlength'=>300,'style'=>'resize:none')); ?>
		<?php echo $form->error($model,'descripcionSolucion'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->labelEx($model,'comentarios'); ?>
		<?php echo $form->textArea($model,'comentarios',array('placeholder'=>'Comentarios','size'=>35,'rows'=>15,'cols'=>100,'maxlength'=>300,'style'=>'resize:none')); ?>
		<?php echo $form->error($model,'comentarios'); ?>
	</div>

	<div class="row">
		Fecha de Solucion<span class="required">*</span><br>
			<?php
			$fechaMax = date('Y/m/d');

			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			    'name'=>'BitacoraSistemas[fechaSolucion]',
				'language'=> 'es',
				'value'=>$model->fechaSolucion,

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>