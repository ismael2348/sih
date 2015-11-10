<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Consumibles</span>',array('stockImpresora/admin')); ?>
	<br><br>


<h1>Actualizacion de consumible #<?php echo $model->id ."       MODELO ->".$model->consumible; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'Areas'=>$Areas)); ?>