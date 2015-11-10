<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
?>
<?php echo CHtml::link('<span class="botonAccion Back">Gestión de<br>Usuarios</span>',array('usuarios/admin')); ?><br><br>
<h1>Actualización de  Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>