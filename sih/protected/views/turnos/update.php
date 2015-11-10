<?php
/* @var $this TurnosController */
/* @var $model Turnos */


?>
<?php echo CHtml::link('<span class="botonAccion Back">Gestión de <br> Turnos </span>',array('turnos/admin')); ?>
<h1>Actualización del Turno -[<?php echo $model->nombre; ?>]-</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>