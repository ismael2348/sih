<?php
/* @var $this PacientesController */
/* @var $model Pacientes */
?>
<?php echo CHtml::link('<span class="botonAccion Back">Lista  de <br>Pacientes</span>',array('pacientes/admin')); ?>
<br><br>
<h1>Registro de Paciente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>