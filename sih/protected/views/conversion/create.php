	<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Tabla de<br>conversiónes</span>',array('conversiones/admin')); ?>
	<br><br>
<div class="centrar">
	<h1>Registro de conversión</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>