<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Inventario</span>',array('inventarioConsumiblesSistemas/admin')); ?>
	<br><br>
<div class="centrar";>
<h1>Nuevo Registro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>