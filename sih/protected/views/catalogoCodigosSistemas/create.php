<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Codigos</span>',array('catalogoCodigosSistemas/admin')); ?>
	<br><br>
<div class="centrar">
<h1>Regsitro de codigo </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>