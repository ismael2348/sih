	<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Bitacora</span>',array('bitacoraSistemas/admin')); ?>
	<br><br>
<div class="centrar">
	<h1>Registro de Bitacora</h1>

	<?php $this->renderPartial('_form', array('model'=>$model,'CatalogoCodigosSistemas'=>$CatalogoCodigosSistemas,'Areas'=>$Areas,'InventarioConsumiblesSistemas'=>$InventarioConsumiblesSistemas,'InventarioEquipoSistemas'=>$InventarioEquipoSistemas,'Personas'=>$Personas)); ?>
</div>