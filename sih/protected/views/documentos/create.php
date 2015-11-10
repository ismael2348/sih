	<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">GestiÃ³n de<br>documentos</span>',array('documentos/admin')); ?>
	<br><br>
<div class="centrar">
	<h1>Registro de documento</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>