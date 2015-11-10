<?php
/* @var $this TurnosController */
/* @var $model Turnos */

?>
<?php echo CHtml::link('<span class="botonAccion Back">Gestión de <br> Turnos</span>',array('turnos/admin')); ?>
<h1>Registro de  Turnos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>