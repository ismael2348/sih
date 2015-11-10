<?php echo CHtml::link('<span class="botonAccionAdd">Lista de <br> Usuarios</span>',array('usuarios/admin')); ?>
<br><br>


<h1>Detalles del Usuario -[<?php echo $model->usuario ;?>]-</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(	"name"=>'Nombre del Empleado',
				"value"=>$model->idPersona->nombres),
		array(	"name"=>'Rol',
				"value"=>$model->idRol->nombre),
		'usuario',
		'contrasena',
		'fecha_registro',
		'fecha_expiracion',
		'activo',
	),
)); ?>
