<?php echo CHtml::link('<span class="botonAccion Back">Gestión de <br>IPS</span>',array('inventIp/admin')); ?><br><br>
<br><br>
<h1>Actualizacion de la Ip -[<?php echo $model->ip; ?>]-</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>