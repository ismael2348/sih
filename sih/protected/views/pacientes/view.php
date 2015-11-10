<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

?>
<?php echo CHtml::link('<span class="botonAccion Back">Gestión de <br>Pacientes</span>',array('pacientes/admin')); ?>
<br><br>

<h1>Detalles del paciente -[<?php echo $model->apPat." ".$model->apMat." ".$model->nombre ; ?>]-</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apMat',
		'apPat',
		'sexo',
		'religion',
		'estadoCivil',
		'calleNum',
		'colonia',
		'cp',
		'municipio',
		'estado',
		'pais',
		'email',
		'email2',
		'telefono',
		'telefono2',
		'celular',
		'celular2',
		'depositoRiesgos',
		'montoDepositado',
		'fechaCreacion',
		'activo',
	),
)); ?>
