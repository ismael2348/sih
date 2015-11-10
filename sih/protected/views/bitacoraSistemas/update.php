<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Respaldos</span>',array('bitacoraSistemas/admin')); ?>
	<br><br>
<div style="text-align:center">
<h1>Actualizacion de la incidencia con ID :   <?php echo $model->id; ?></h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model,'CatalogoCodigosSistemas'=>$CatalogoCodigosSistemas,'Areas'=>$Areas,'InventarioConsumiblesSistemas'=>$InventarioConsumiblesSistemas,'InventarioEquipoSistemas'=>$InventarioEquipoSistemas,'Personas'=>$Personas)); ?>