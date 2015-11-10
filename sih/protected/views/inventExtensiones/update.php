<?php echo CHtml::link('<span class="botonAccion Back">Lista de<br>Extensión</span>',array('inventExtensiones/admin')); ?>
<br><br>
<h1>Actualización de la Extension -[#<?php echo $model->num_ext; ?>]-</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'InventIp'=>$InventIp,'Areas'=>$Areas)); ?>