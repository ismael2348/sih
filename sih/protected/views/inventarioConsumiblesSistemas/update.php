<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Stock</span>',array('inventarioConsumiblesSistemas/admin')); ?>
	<br><br>

<h1>Actualizacion de: [<?php echo $model->area." ".$model->modelo."]numero#"." [".$model->id;  ?>]</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>