<?php
/* @var $this AreasPuestosController */
/* @var $model AreasPuestos */

?>

<h1>Vinculación de puestos para el área de <?php echo $areaNombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'puestos'=>$puestos)); ?>