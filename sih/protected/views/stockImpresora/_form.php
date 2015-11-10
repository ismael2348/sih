<?php
/* @var $this StockImpresoraController */
/* @var $model StockImpresora */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-impresora-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="registro">
	<p class="note">Los campos <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		Ubicacion<span class="required">*</span><br> 
		<select name="StockImpresora[id_area]" id="StockImpresora_id_area">
		<option> </option>
		<?php
			foreach($Areas as $areas)
			{
		?>
		<option value="<?php echo $areas->id;?>"><?php echo $areas->nombre;?></option>
		<?php
			}
		?>
		</select>
	</div>
	
	<div class="row">
	Tipo<span class="required">*</span><br>
	<select name="StockImpresora[tipo]" id="StockImpresora_tipo">
		<option><?php  echo $model->tipo ?></option>
		<option value="Laser">Laser</option>
		<option value="Inyeccion de tinta">Inyeccion de tinta</option>
	</select>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'consumible'); ?>
		<?php echo $form->textField($model,'consumible',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'consumible'); ?>
	</div>

	<div class="row">
		Stock<input type="number" name="StockImpresora[stock]" id="StockImpresora_stock" min="0" max="5" value="<?php  echo $model->stock ?>">
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
</div>