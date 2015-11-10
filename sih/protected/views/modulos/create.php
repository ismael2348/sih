<?php echo CHtml::link('<span class="botonAccion Back">Gestión de <br> Modulos</span>',array('modulos/admin')); ?>
<br><br>

<h1>Registro de  Modulos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>