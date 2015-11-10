<?php
/* @var $this PacientesAseguradoraController */
/* @var $model PacientesAseguradora */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->baseUrl; 
 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/jquery.timepicker.js');
$cs->registerScriptFile($baseUrl.'/js/funciones.js');
$cs->registerScriptFile($baseUrl.'/js/autoNumeric.js');
$cs->registerScriptFile($baseUrl.'/js/maskhours.js');
?>
<script type="text/javascript">
	$(document).ready(function() {
    $('.autoNumero').autoNumeric('init',{
    	aSign:"$"
    });
	$('.reloj').timepicker({ 'timeFormat': 'H:i','scrollDefault': 'now','step': 1  });
   // $(".reloj").mask("99:99");
});
</script>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pacientes-aseguradora-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>




<div class="formsPA">
	<?php if(array_key_exists("PA_IDASEGURADORA", Yii::app()->user->permisos)){ ?>
	<div class="row">
		Nombre de la Aseguradora:<br>
		<?php if($model->isNewRecord){

		 $this->widget('ext.MyAutoComplete', array(
		    'model'=>$model,
		    'attribute'=>'id_aseguradora',
		    'name'=>'aseguradora_autocomplete',
		    //'id'=>'Peticiones_para',
		    'source'=>$this->createUrl('aseguradoras/ObtenerAseguradora'),  // Controller/Action path for action we created in step 4.
		    // additional javascript options for the autocomplete plugin
		    'options'=>array(
		        'minLength'=>'0',
	    ),
		));
	?>

<?php }else{ ?>

<input type="text" value="<?php echo Aseguradoras::model()->findByPk($model->id_aseguradora)->nombre; ?>" disabled>
<input type="hidden" value="<?php echo $model->id_aseguradora; ?>" name="PacientesAseguradora[id_aseguradora]">


<?php } ?>

</div>
<?php } ?>

<?php if(array_key_exists("PA_NUMEROPOLIZA", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'numeroPoliza'); ?>
		<?php echo $form->textField($model,'numeroPoliza',array('size'=>20,'maxlength'=>20,'readonly'=>(!empty($model->numeroPoliza) ? true : false))); ?>
		<?php echo $form->error($model,'numeroPoliza'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_MONTOAUTORIZADO", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'montoAutorizado'); ?>
		<?php echo $form->textField($model,'montoAutorizado',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->montoAutorizado) ? true : false))); ?>
		<?php echo $form->error($model,'montoAutorizado'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_DEDUCIBLE", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'deducible'); ?>
		<?php echo $form->textField($model,'deducible',array('size'=>25,'maxlength'=>25,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->deducible) ? true : false))); ?>
		<?php echo $form->error($model,'deducible'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_CUASEGURO", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cuaSeguro'); ?>
		<?php echo $form->textField($model,'cuaSeguro',array('size'=>25,'maxlength'=>25,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cuaSeguro) ? true : false))); ?>
		<?php echo $form->error($model,'cuaSeguro'); ?>
	</div>
<?php } ?>

<?php if(array_key_exists("PA_ATENCIONASEG", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'atencionAseg'); ?>
		<?php echo $form->textArea($model,'atencionAseg',array('placeholder'=>'Nombre Completo de la persona','size'=>25,'maxlength'=>300,'size'=>20,'style'=>'resize:none','readonly'=>(!empty($model->excluciones) ? true : false))); ?>
		<?php echo $form->error($model,'atencionAseg'); ?>
	</div>
<?php } ?>


<?php if(array_key_exists("PA_EXCLUSIONES", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'excluciones'); ?>
		<?php echo $form->textArea($model,'excluciones',array('placeholder'=>'1.','size'=>25,'maxlength'=>300,'rows'=>15,'cols'=>100,'size'=>20,'style'=>'resize:none','readonly'=>(!empty($model->excluciones) ? true : false))); ?>
		<?php echo $form->error($model,'excluciones'); ?>
	</div>
<?php } ?>

<?php if(array_key_exists("PA_OBSERVACIONES", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones', array('size'=>25,'maxlength'=>300,'rows'=>33,'cols'=>300,'size'=>100,'style'=>'resize:none','readonly'=>(!empty($model->observaciones) ? true : false))); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>
<?php } ?>
</div>
<div class="formsPA">
<?php if(array_key_exists("PA_FECHAAUTORIZACION", Yii::app()->user->permisos)){ ?>

	<div class="row">
		Fecha de Autorización: <span class="required">*</span><br>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'PacientesAseguradora[fechaAutorizacion]',
			'language'=> 'es',
			'value'=>substr($model->fechaAutorizacion,0,10),

		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2010:2020',
        //'minDate' => '2000-01-01',      // minimum date
        //'maxDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		    ),'htmlOptions'=>array('readonly'=>'true','maxlength'=>'10'),

		));
		?>
		<div style="display:inline-block;">
		Hora:
		<input type="text" name="fechaAutorizacion" class="reloj" placeholder="24:00" value="<?php echo !empty($horas[0]) ? $horas[0] : "00:00"; ?>" maxlength="5">
		</div>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FECHADOCUMENTACIONCOMPLETA", Yii::app()->user->permisos)){ ?>
	<div class="row">
		Fecha Documentación Completa: <span class="required">*</span><br>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'PacientesAseguradora[fechaDocumentacionCompleta]',
			'language'=> 'es',
			'value'=>substr($model->fechaDocumentacionCompleta,0,10),

		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2010:2020',
        //'minDate' => '2000-01-01',      // minimum date
        //'maxDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		),'htmlOptions'=>array('readonly'=>'true','maxlength'=>'10'),
		));
		?>
				<div style="display:inline-block;">
		Hora:
		<input type="text" name="fechaDocCompleta" class="reloj" placeholder="24:00"  value="<?php echo !empty($horas[1]) ? $horas[1] : "00:00"; ?>">
		</div>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FECHAPAGOASEGURADORA", Yii::app()->user->permisos)){ ?>
	<div class="row">
		Fecha Pago Aseguradora: <span class="required">*</span><br>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'PacientesAseguradora[fechaPagoAseguradora]',
			'language'=> 'es',
			'value'=>substr($model->fechaPagoAseguradora,0,10),

		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2010:2020',
        //'minDate' => '2000-01-01',      // minimum date
        //'maxDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		    		    ),'htmlOptions'=>array('readonly'=>'true','maxlength'=>'10'),
		));
		?>
				<div style="display:inline-block;">
		Hora:
		<input type="text" name="fechaPagoAseguradora" class="reloj" placeholder="24:00" value="<?php echo !empty($horas[2]) ? $horas[2] : "00:00"; ?>">
		</div>
	</div>
<?php } ?>


<?php if(array_key_exists("PA_MONTOHOSPITAL", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'montoHospital'); ?>
		<?php echo $form->textField($model,'montoHospital',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->montoHospital) ? true : false))); ?>
		<?php echo $form->error($model,'montoHospital'); ?>
	</div>
<?php } ?>



<?php if(array_key_exists("PA_MONTOHONORARIOS", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'montoHonorarios'); ?>
		<?php echo $form->textField($model,'montoHonorarios',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->montoHonorarios) ? true : false))); ?>
		<?php echo $form->error($model,'montoHonorarios'); ?>
	</div>
<?php } ?>

<?php if(array_key_exists("PA_FOLIOSINISTRO", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'folioSinistro'); ?>
		<?php echo $form->textField($model,'folioSinistro',array('size'=>25,'maxlength'=>25,'readonly'=>(!empty($model->folioSinistro) ? true : false))); ?>
		<?php echo $form->error($model,'folioSinistro'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FOLIORASTREO", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'folioRastreo'); ?>
		<?php echo $form->textField($model,'folioRastreo',array('size'=>25,'maxlength'=>25,'readonly'=>(!empty($model->folioRastreo) ? true : false))); ?>
		<?php echo $form->error($model,'folioRastreo'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FOLIOASEGURADORA", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'folioAseguradora'); ?>
		<?php echo $form->textField($model,'folioAseguradora',array('size'=>20,'maxlength'=>20,'readonly'=>(!empty($model->folioAseguradora) ? true : false))); ?>
		<?php echo $form->error($model,'folioAseguradora'); ?>
	</div>
<?php } ?>




<?php if(array_key_exists("PA_FACTURA", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'factura'); ?>
		<?php echo $form->textField($model,'factura',array('size'=>20,'maxlength'=>40,'readonly'=>(!empty($model->factura) ? true : false))); ?>
		<?php echo $form->error($model,'factura'); ?>
	</div>
<?php } ?>


<?php if(array_key_exists("PA_MEDICOPRINCIPAL", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'medicoPrincipal'); ?>
		<?php echo $form->textField($model,'medicoPrincipal',array('size'=>40,'maxlength'=>40,'readonly'=>(!empty($model->medicoPrincipal) ? true : false))); ?>
		<?php echo $form->error($model,'medicoPrincipal'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_DIAGNOSTICO", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'diagnosticoResum'); ?>
		<?php echo $form->textField($model,'diagnosticoResum',array('rows'=>15,'cols'=>100,'size'=>20,'style'=>'resize:none','maxlength'=>40,'readonly'=>(!empty($model->diagnosticoResum) ? true : false))); ?>
		<?php echo $form->error($model,'diagnosticoResum'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_ESPECIALIDAD", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>20,'maxlength'=>40,'readonly'=>(!empty($model->especialidad) ? true : false))); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>
<?php } ?>




<?php if(array_key_exists("PA_NOMBRETRATANTE1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreTratante1'); ?>
		<?php echo $form->textField($model,'nombreTratante1',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreTratante1) ? true : false))); ?>
		<?php echo $form->error($model,'nombreTratante1'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_SUELDOTRATANTE1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'sueldoTratante1'); ?>
		<?php echo $form->textField($model,'sueldoTratante1',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->sueldoTratante1) ? true : false))); ?>
		<?php echo $form->error($model,'sueldoTratante1'); ?>
		<br><span class="notas" onclick="mostrar(this,'tratante2')" <?php echo $model->nombreTratante2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro tratante.</span>
	</div>


	<div id="tratante2" style="display:<?php echo $model->nombreTratante2!="" ? "block" : "none"; ?>;">
<?php } ?>
<?php if(array_key_exists("PA_NOMBRETRATANTE2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreTratante2'); ?>
		<?php echo $form->textField($model,'nombreTratante2',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreTratante2) ? true : false))); ?>
		<?php echo $form->error($model,'nombreTratante2'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_SUELDOTRATANTE2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'sueldoTratante2'); ?>
		<?php echo $form->textField($model,'sueldoTratante2',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->sueldoTratante2) ? true : false))); ?>
		<?php echo $form->error($model,'sueldoTratante2'); ?>
	</div>
<?php } ?>
</div>


<?php if(array_key_exists("PA_INSTRUMENTISTA1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreInstrument1'); ?>
		<?php echo $form->textField($model,'nombreInstrument1',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreInstrument1) ? true : false))); ?>
		<?php echo $form->error($model,'nombreInstrument1'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INSTRUMENTISTA1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'sueldoInstrumentist1'); ?>
		<?php echo $form->textField($model,'sueldoInstrumentist1',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->sueldoInstrumentist1) ? true : false))); ?>
		<?php echo $form->error($model,'sueldoInstrumentist1'); ?>
		<br><span class="notas" onclick="mostrar(this,'instrument2')" <?php echo $model->nombreInstrument2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro instrumentista.</span>
	</div>
<?php } ?>

	<div id="instrument2" style="display:<?php echo $model->nombreInstrument2!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_INSTRUMENTISTA2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreInstrument2'); ?>
		<?php echo $form->textField($model,'nombreInstrument2',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreInstrument2) ? true : false))); ?>
		<?php echo $form->error($model,'nombreInstrument2'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INSTRUMENTISTA2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'sueldoInstrumentist2'); ?>
		<?php echo $form->textField($model,'sueldoInstrumentist2',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->sueldoInstrumentist2) ? true : false))); ?>
		<?php echo $form->error($model,'sueldoInstrumentist2'); ?>
	</div>
<?php } ?>
</div>


<?php if(array_key_exists("PA_ANESTESIOLOGONOMBRE", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreAnestesiolog'); ?>
		<?php echo $form->textField($model,'nombreAnestesiolog',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreAnestesiolog) ? true : false))); ?>
		<?php echo $form->error($model,'nombreAnestesiolog'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_ANESTESIOLOGOSUELDO", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'sueldoAnestesiolog'); ?>
		<?php echo $form->textField($model,'sueldoAnestesiolog',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->sueldoAnestesiolog) ? true : false))); ?>
		<?php echo $form->error($model,'sueldoAnestesiolog'); ?>
	</div>
<?php } ?>



<?php if(array_key_exists("PA_INTERCONSULTA1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'interconsulta1'); ?>
		<?php echo $form->textField($model,'interconsulta1',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->interconsulta1) ? true : false))); ?>
		<?php echo $form->error($model,'interconsulta1'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreDocInter1'); ?>
		<?php echo $form->textField($model,'nombreDocInter1',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreDocInter1) ? true : false))); ?>
		<?php echo $form->error($model,'nombreDocInter1'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad1'); ?>
		<?php echo $form->textField($model,'cantidad1',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidad1) ? true : false))); ?>
		<?php echo $form->error($model,'cantidad1'); ?>
		<br><span class="notas" onclick="mostrar(this,'interconsultax2')" <?php echo $model->interconsulta2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otra interconsulta.</span>
	</div>
<?php } ?>

	<div id="interconsultax2" style="display:<?php echo $model->interconsulta2!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_INTERCONSULTA2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'interconsulta2'); ?>
		<?php echo $form->textField($model,'interconsulta2',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->interconsulta2) ? true : false))); ?>
		<?php echo $form->error($model,'interconsulta2'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreDocInter2'); ?>
		<?php echo $form->textField($model,'nombreDocInter2',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreDocInter2) ? true : false))); ?>
		<?php echo $form->error($model,'nombreDocInter2'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad2'); ?>
		<?php echo $form->textField($model,'cantidad2',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidad2) ? true : false))); ?>
		<?php echo $form->error($model,'cantidad2'); ?>
		<br><span class="notas" onclick="mostrar(this,'interconsultax3')" <?php echo $model->interconsulta3!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otra interconsulta.</span>
	</div>
<?php } ?>
</div>


	<div id="interconsultax3" style="display:<?php echo $model->interconsulta3!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_INTERCONSULTA3", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'interconsulta3'); ?>
		<?php echo $form->textField($model,'interconsulta3',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->interconsulta3) ? true : false))); ?>
		<?php echo $form->error($model,'interconsulta3'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA3", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreDocInter3'); ?>
		<?php echo $form->textField($model,'nombreDocInter3',array('size'=>30,'readonly'=>(!empty($model->nombreDocInter3) ? true : false))); ?>
		<?php echo $form->error($model,'nombreDocInter3'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA3", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad3'); ?>
		<?php echo $form->textField($model,'cantidad3',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidad3) ? true : false))); ?>
		<?php echo $form->error($model,'cantidad3'); ?>
		<br><span class="notas" onclick="mostrar(this,'interconsultax4')" <?php echo $model->interconsulta4!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otra interconsulta.</span>
	</div>
<?php } ?>
</div>


	<div id="interconsultax4" style="display:<?php echo $model->interconsulta4!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_INTERCONSULTA4", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'interconsulta4'); ?>
		<?php echo $form->textField($model,'interconsulta4',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->interconsulta4) ? true : false))); ?>
		<?php echo $form->error($model,'interconsulta4'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA4", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreDocInter4'); ?>
		<?php echo $form->textField($model,'nombreDocInter4',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreDocInter4) ? true : false))); ?>
		<?php echo $form->error($model,'nombreDocInter4'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA4", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad4'); ?>
		<?php echo $form->textField($model,'cantidad4',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidad4) ? true : false))); ?>
		<?php echo $form->error($model,'cantidad4'); ?>
		<br><span class="notas" onclick="mostrar(this,'interconsultax5')" <?php echo $model->interconsulta5!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otra interconsulta.</span>
	</div>
<?php } ?>
</div>




	<div id="interconsultax5" style="display:<?php echo $model->interconsulta5!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_INTERCONSULTA5", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'interconsulta5'); ?>
		<?php echo $form->textField($model,'interconsulta5',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','readonly'=>(!empty($model->interconsulta5) ? true : false))); ?>
		<?php echo $form->error($model,'interconsulta5'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA5", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreDocInter5'); ?>
		<?php echo $form->textField($model,'nombreDocInter5',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','readonly'=>(!empty($model->nombreDocInter5) ? true : false))); ?>
		<?php echo $form->error($model,'nombreDocInter5'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA5", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad5'); ?>
		<?php echo $form->textField($model,'cantidad5',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidad5) ? true : false))); ?>
		<?php echo $form->error($model,'cantidad5'); ?>
		<br><span class="notas" onclick="mostrar(this,'interconsultax6')" <?php echo $model->interconsulta6!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otra interconsulta.</span>
	</div>
<?php } ?>

</div>


	<div id="interconsultax6" style="display:<?php echo $model->interconsulta6!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_INTERCONSULTA6", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'interconsulta6'); ?>
		<?php echo $form->textField($model,'interconsulta6',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->interconsulta6) ? true : false))); ?>
		<?php echo $form->error($model,'interconsulta4'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA6", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreDocInter6'); ?>
		<?php echo $form->textField($model,'nombreDocInter6',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreDocInter6) ? true : false))); ?>
		<?php echo $form->error($model,'nombreDocInter6'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA6", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad6'); ?>
		<?php echo $form->textField($model,'cantidad6',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidad6) ? true : false))); ?>
		<?php echo $form->error($model,'cantidad6'); ?>
		<br><span class="notas" onclick="mostrar(this,'interconsultax7')" <?php echo $model->interconsulta7!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otra interconsulta.</span>
	</div>
<?php } ?>
</div>


<div id="interconsultax7" style="display:<?php echo $model->interconsulta7!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_INTERCONSULTA7", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'interconsulta7'); ?>
		<?php echo $form->textField($model,'interconsulta7',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->interconsulta7) ? true : false))); ?>
		<?php echo $form->error($model,'interconsulta7'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_INTERCONSULTA7", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreDocInter7'); ?>
		<?php echo $form->textField($model,'nombreDocInter7',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreDocInter7) ? true : false))); ?>
		<?php echo $form->error($model,'nombreDocInter7'); ?>
	</div>
<?php } ?>

<?php if(array_key_exists("PA_INTERCONSULTA7", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad7'); ?>
		<?php echo $form->textField($model,'cantidad7',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidad7) ? true : false))); ?>
		<?php echo $form->error($model,'cantidad7'); ?>
	</div>
<?php } ?>
	</div>

<?php if(array_key_exists("PA_NOMBREPROVEE1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'Proveedor1'); ?>
		<?php echo $form->textField($model,'Proveedor1',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->Proveedor1) ? true : false))); ?>
		<?php echo $form->error($model,'Proveedor1'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_SUELDOPROVEE1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreProvee1'); ?>
		<?php echo $form->textField($model,'nombreProvee1',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreProvee1) ? true : false))); ?>
		<?php echo $form->error($model,'nombreProvee1'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FACTPROVEE1", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidadProvee1'); ?>
		<?php echo $form->textField($model,'cantidadProvee1',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidadProvee1) ? true : false))); ?>
		<?php echo $form->error($model,'cantidadProvee1'); ?>
		<br><span class="notas" onclick="mostrar(this,'proveex2')" <?php echo $model->Proveedor2!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro proveedor.</span>
	</div>
<?php } ?>



<div id="proveex2" style="display:<?php echo $model->Proveedor2!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_NOMBREPROVEE2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'Proveedor2'); ?>
		<?php echo $form->textField($model,'Proveedor2',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->Proveedor2) ? true : false))); ?>
		<?php echo $form->error($model,'Proveedor2'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_SUELDOPROVEE2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreProvee2'); ?>
		<?php echo $form->textField($model,'nombreProvee2',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreProvee2) ? true : false))); ?>
		<?php echo $form->error($model,'nombreProvee2'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FACTPROVEE2", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidadProvee2'); ?>
		<?php echo $form->textField($model,'cantidadProvee2',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidadProvee2) ? true : false))); ?>
		<?php echo $form->error($model,'cantidadProvee2'); ?>
		<br><span class="notas" onclick="mostrar(this,'proveex3')" <?php echo $model->Proveedor3!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro proveedor.</span>
	</div>
<?php } ?>
</div>


<div id="proveex3" style="display:<?php echo $model->Proveedor3!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_NOMBREPROVEE3", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'Proveedor3'); ?>
		<?php echo $form->textField($model,'Proveedor3',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->Proveedor3) ? true : false))); ?>
		<?php echo $form->error($model,'Proveedor3'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_SUELDOPROVEE3", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreProvee3'); ?>
		<?php echo $form->textField($model,'nombreProvee3',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreProvee3) ? true : false))); ?>
		<?php echo $form->error($model,'nombreProvee3'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FACTPROVEE3", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidadProvee3'); ?>
		<?php echo $form->textField($model,'cantidadProvee3',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidadProvee3) ? true : false))); ?>
		<?php echo $form->error($model,'cantidadProvee3'); ?>
		<br><span class="notas" onclick="mostrar(this,'proveex4')" <?php echo $model->Proveedor4!="" ? "style='display:none'" : ""; ?>><img src="images/add.png" class="iconoFormas" > click para agregar otro proveedor.</span>
	</div>
<?php } ?>
</div>


<div id="proveex4" style="display:<?php echo $model->Proveedor4!="" ? "block" : "none"; ?>;">
<?php if(array_key_exists("PA_NOMBREPROVEE4", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'Proveedor4'); ?>
		<?php echo $form->textField($model,'Proveedor4',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->Proveedor4) ? true : false))); ?>
		<?php echo $form->error($model,'Proveedor4'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_SUELDOPROVEE4", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nombreProvee4'); ?>
		<?php echo $form->textField($model,'nombreProvee4',array('size'=>30,'maxlength'=>30,'readonly'=>(!empty($model->nombreProvee4) ? true : false))); ?>
		<?php echo $form->error($model,'nombreProvee4'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FACTPROVEE4", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantidadProvee4'); ?>
		<?php echo $form->textField($model,'cantidadProvee4',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantidadProvee4) ? true : false))); ?>
		<?php echo $form->error($model,'cantidadProvee4'); ?>
	</div>
<?php } ?>
</div>






</div>
<div class="formsPA">
<?php if(array_key_exists("PA_ASEGURADORAPAGOOK", Yii::app()->user->permisos)){ ?>
	<div class="row">
	<label for="PacientesAseguradora_aseguradoraPagoOk">¿Pago recibido de aseguradora?</label><br>
	<input type="checkbox" name="PacientesAseguradora[aseguradoraPagoOk]" id="PacientesAseguradora_aseguradoraPagoOk" value="1" onclick="mostrarPagoRecAseg()" <?php echo $model->aseguradoraPagoOk == 1 ? 'checked' : ''; ?>> SI
	</div>
<?php } ?>
<div id="PagoRecAseg" style="display:<?php echo $model->aseguradoraPagoOk == 1 ? 'block' : 'none'; ?>;">
<?php if(array_key_exists("PA_TIPOPAGOASEG", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<label for="PacientesAseguradora_pagoParcial">¿Pago Parcial?</label><br>
		<input type="checkbox" name="PacientesAseguradora[pagoParcial]" id="PacientesAseguradora_pagoParcial" value="1"  <?php echo $model->pagoParcial == 1 ? 'checked' : ''; ?>> SI <br>
		<br>Tipo de Pago: <span class="required">*</span><br>
	<select name="PacientesAseguradora[tipoPagoAseg]" id="PacientesAseguradora_tipoPagoAseg">
			<option></option>
			<option <?php echo $model->tipoPagoAseg == "TRANSFERENCIA" ? "SELECTED" : ""; ?>>TRANSFERENCIA</option>
			<option <?php echo $model->tipoPagoAseg == "CHEQUE" ? "SELECTED" : ""; ?>>CHEQUE</option>
			<option <?php echo $model->tipoPagoAseg == "EFECTIVO" ? "SELECTED" : ""; ?>>EFECTIVO</option>
	</select>

	</div>
<?php } ?>
<?php if(array_key_exists("PA_CANTPAGOASEG", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantPagoAseg'); ?>
		<?php echo $form->textField($model,'cantPagoAseg',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantPagoAseg) ? true : false))); ?>
		<?php echo $form->error($model,'cantPagoAseg'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_DETAPAGOASEG", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'detaPagoAseg'); ?>
		<?php echo $form->textArea($model,'detaPagoAseg',array('size'=>30,'maxlength'=>500,'rows'=>15,'cols'=>100,'size'=>20,'style'=>'resize:none','readonly'=>(!empty($model->detaPagoAseg) ? true : false))); ?>
		<?php echo $form->error($model,'detaPagoAseg'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FECHAPAGOASEG", Yii::app()->user->permisos)){ ?>
	<div class="row">
		Fecha del Pago: <span class="required">*</span><br>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'PacientesAseguradora[fechaPagoAseg]',
			'language'=> 'es',
			'value'=>substr($model->fechaPagoAseg,0,10),

		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2010:2020',
        //'minDate' => '2000-01-01',      // minimum date
        //'maxDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		    ),'htmlOptions'=>array('readonly'=>'true','maxlength'=>'10'),
		));
		?>
	
		<div style="display:inline-block;">
		Hora:
		<input type="text" name="fechaPagoAseg" class="reloj"  placeholder="24:00" value="<?php echo !empty($horas[3]) ? $horas[3] : "00:00"; ?>">
	</div>	
	</div>
<?php } ?>
</div>
</div>
<div class="formsPA">
<?php if(array_key_exists("PA_PROVEEDORESPAGOOK", Yii::app()->user->permisos)){ ?>
	<div class="row">
	<label for="PacientesAseguradora_proveedoresPagoOk">¿Se pago a los proveedores?</label><br>
	<input type="checkbox" name="PacientesAseguradora[proveedoresPagoOk]" id="PacientesAseguradora_proveedoresPagoOk" value="1" onclick="mostrarProvee()"  <?php echo $model->proveedoresPagoOk == 1 ? 'checked' : ''; ?>> SI
	</div>
<?php } ?>
<div id="proveePagoOk" style="display:<?php echo $model->proveedoresPagoOk == 1 ? 'block' : 'none'; ?>;">
<?php if(array_key_exists("PA_TIPOPAGOPROVEE", Yii::app()->user->permisos)){ ?>
	<div class="row">
	Tipo de Pago: <span class="required">*</span><br>
		<select name="PacientesAseguradora[tipoPagoProvee]" id="PacientesAseguradora_tipoPagoProvee">
			<option></option>
			<option <?php echo $model->tipoPagoProvee == "TRANSFERENCIA" ? "SELECTED" : ""; ?>>TRANSFERENCIA</option>
			<option <?php echo $model->tipoPagoProvee == "CHEQUE" ? "SELECTED" : ""; ?>>CHEQUE</option>
			<option <?php echo $model->tipoPagoProvee == "EFECTIVO" ? "SELECTED" : ""; ?>>EFECTIVO</option>
		</select>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_CANTPAGOPROVEE", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantPagoProvee'); ?>
		<?php echo $form->textField($model,'cantPagoProvee',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantPagoProvee) ? true : false))); ?>
		<?php echo $form->error($model,'cantPagoProvee'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_DETAPAGOPROVEE", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'detaPagoProvee'); ?>
		<?php echo $form->textArea($model,'detaPagoProvee',array('size'=>30,'maxlength'=>500,'rows'=>15,'cols'=>100,'size'=>20,'style'=>'resize:none','readonly'=>(!empty($model->detaPagoProvee) ? true : false))); ?>
		<?php echo $form->error($model,'detaPagoProvee'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FECHAPAGOPROVE", Yii::app()->user->permisos)){ ?>
	<div class="row">
		Fecha del Pago: <span class="required">*</span><br>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'PacientesAseguradora[fechaPagoProvee]',
			'language'=> 'es',
			'value'=>substr($model->fechaPagoProvee,0,10),

		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2010:2020',
        //'minDate' => '2000-01-01',      // minimum date
        //'maxDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		    ),'htmlOptions'=>array('readonly'=>'true','maxlength'=>'10'),
		));
		?>
				<div style="display:inline-block;">
		Hora:
		<input type="text" name="fechaPagoProve"  class="reloj" placeholder="24:00" value="<?php echo !empty($horas[4]) ? $horas[4] : "00:00"; ?>">
		</div>
	</div>
<?php } ?>
</div>
</div>
<div class="formsPA">
<?php if(array_key_exists("PA_HONORARIOSPAGOOK", Yii::app()->user->permisos)){ ?>
	<div class="row">
	<label for="PacientesAseguradora_honorariosPagoOk">¿Se pagaron los honorarios?</label><br>
	<input type="checkbox" name="PacientesAseguradora[honorariosPagoOk]" id="PacientesAseguradora_honorariosPagoOk" value="1" onclick="mostrarHono()" <?php echo $model->honorariosPagoOk == 1 ? 'checked' : ''; ?>> SI
	</div>
<?php } ?>
<div id="hono" style="display:<?php echo $model->honorariosPagoOk == 1 ? 'block' : 'none'; ?>;">
<?php if(array_key_exists("PA_TIPOPAGOHONORARIOS", Yii::app()->user->permisos)){ ?>
	<div class="row">
	Tipo de Pago: <span class="required">*</span><br>
		<select name="PacientesAseguradora[tipoPagoHonorarios]" id="PacientesAseguradora_tipoPagoHonorarios">
			<option></option>
			<option <?php echo $model->tipoPagoHonorarios == "TRANSFERENCIA" ? "SELECTED" : ""; ?>>TRANSFERENCIA</option>
			<option <?php echo $model->tipoPagoHonorarios == "CHEQUE" ? "SELECTED" : ""; ?>>CHEQUE</option>
			<option <?php echo $model->tipoPagoHonorarios == "EFECTIVO" ? "SELECTED" : ""; ?>>EFECTIVO</option>
		</select>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_CANTPAGOHONORARIOS", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'cantPagoHonorarios'); ?>
		<?php echo $form->textField($model,'cantPagoHonorarios',array('size'=>30,'maxlength'=>30,'placeholder'=>'0,000,00','class'=>'autoNumero','readonly'=>(!empty($model->cantPagoHonorarios) ? true : false))); ?>
		<?php echo $form->error($model,'cantPagoHonorarios'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_DETAPAGOHONORARIOS", Yii::app()->user->permisos)){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'detaPagoHonorarios'); ?>
		<?php echo $form->textArea($model,'detaPagoHonorarios',array('size'=>30,'maxlength'=>500,'rows'=>15,'cols'=>100,'size'=>20,'style'=>'resize:none','readonly'=>(!empty($model->detaPagoHonorarios) ? true : false))); ?>
		<?php echo $form->error($model,'detaPagoHonorarios'); ?>
	</div>
<?php } ?>
<?php if(array_key_exists("PA_FECHAPAGOHONORARIOS", Yii::app()->user->permisos)){ ?>
	<div class="row">
		Fecha del Pago: <span class="required">*</span><br>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'name'=>'PacientesAseguradora[fechaPagoHonorarios]',
			'language'=> 'es',
			'value'=>substr($model->fechaPagoHonorarios,0,10),

		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>'dd-mm-yy',
		    	        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2010:2020',
        //'minDate' => '2000-01-01',      // minimum date
        //'maxDate' => '2014-08-31',      // maximum date
        'showButtonPanel'=>true,
		        'showAnim'=>'fold',
        			
        'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		    ),'htmlOptions'=>array('readonly'=>'true','maxlength'=>'10'),
		));
		?>
				<div style="display:inline-block;">
		Hora:
		<input type="text" name="fechaPagoHono"  class="reloj" placeholder="24:00" value="<?php echo !empty($horas[5]) ? $horas[5] : "00:00"; ?>" >
	</div>	
	</div>
<?php } ?>
</div>
	<div class="row buttons">
		<?php 
			if($model->isNewRecord)
				echo CHtml::submitButton('Registrar'); 
			else{
				echo CHtml::submitButton('Guardar');
				if(array_key_exists("PA_CERRARPROCESO", Yii::app()->user->permisos) && $model->medicoPrincipal!= ""  && $model->diagnosticoResum != ""  && $model->especialidad != "")
					echo CHtml::submitButton('Cerrar proceso'); 
			}
		?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
