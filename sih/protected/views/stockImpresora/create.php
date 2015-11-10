<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Consumibles</span>',array('stockImpresora/admin')); ?>
	<br><br>
<div class="centrar">
	<h1>Nuevo consumible</h1>
	<?php $this->renderPartial('_form', array('model'=>$model,'Areas'=>$Areas)); ?>
</div>