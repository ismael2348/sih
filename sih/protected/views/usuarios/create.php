<?php echo CHtml::link('<span class="botonAccion Back">Gestión de<br>Usuarios</span>',array('usuarios/admin')); ?><br><br>
<h1>Registro de  Usuarios</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>