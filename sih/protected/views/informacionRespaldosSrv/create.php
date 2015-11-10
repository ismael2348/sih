<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Respaldos</span>',array('informacionRespaldosSrv/admin')); ?>
	<br><br>
<div class="centrar">
<h1>Registro de Respaldo </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>