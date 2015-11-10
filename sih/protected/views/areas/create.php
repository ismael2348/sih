<?php
/* @var $this AreasController */
/* @var $model Areas */


?>
<?php echo CHtml::link('<span class="botonAccion Back">Registrar<br>área</span>',array('areas/admin')); ?><br><br>
<h1>Registro de  áreas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>