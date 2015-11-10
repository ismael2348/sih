<?php
/* @var $this PersonasController */
/* @var $model Personas */

?>
<?php echo CHtml::link('<span class="botonAccion Back">Gestión de<br>empleados</span>',array('personas/admin')); ?><br><br>
<h1>Actualización de datos</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'personasInfo'=>$personasInfo, 'turnos'=>$turnos, 'areas'=>$areas,)); ?>