<?php echo CHtml::link('<span class="botonAccion Back">Gestión de <br>IPS</span>',array('inventIp/admin')); ?><br><br>
<h1>Registro de IP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>