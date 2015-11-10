<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Aseguradoras</span>',array('aseguradoras/admin')); ?>
<br><br>
<h1>Registro de Aseguradora</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>