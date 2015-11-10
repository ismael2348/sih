<?php echo CHtml::link('<span class="botonAccion Back" style="width:160px;">Gestión  pacientes<br>con aseguradora</span>',array('pacientesAseguradora/admin')); ?>
<br><br>

<h1>Actualizacion de paciente con aseguradora:<p style="color:#0C91D6; display:inline-block;margin:0;"> <?php echo $paciente; ?></h1>

<?php

 $this->renderPartial('_form', array('model'=>$model,'horas'=>$horas,'paciente'=>$paciente)); ?>