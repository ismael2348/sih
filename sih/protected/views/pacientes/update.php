<?php
/* @var $this PacientesController */
/* @var $model Pacientes */
?>
<?php echo CHtml::link('<span class="botonAccion Back">Lista  de <br>Pacientes</span>',array('pacientes/admin')); ?>
<br><br>
<h1>Actualizar Paciente -[<?php echo $model->apPat." ".$model->apMat." ".$model->nombre ; ?>]-</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>