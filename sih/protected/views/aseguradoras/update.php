<?php echo CHtml::link('<span class="botonAccion Back"  style="width:125px;">Gestión de<br>Aseguradoras</span>',array('aseguradoras/admin')); ?>
<br><br>

<h1>Actualización de Aseguradora: <p style="color:#0C91D6; display:inline-block;margin:0;"><?php echo $model->nombre; ?></p></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>