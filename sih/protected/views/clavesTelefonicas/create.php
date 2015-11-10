<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Claves <br>Telefonicas</span>',array('clavesTelefonicas/admin')); ?>
	<br><br>

<div class="centrar";>
<h1>Registro de Clave Telefonica</h1>
</div>	<!--<div>
		[Informacion de Niveles]
				<p>(L) = Llamadas Locales</p>
				<p>(CL) = Celular Local</p>
				<p>(CLN) = Celular Local Nacional</p>
				<p>(LDN) = Larga Distancia Nacional</p>
				<p>(LDI) = Larga Distancia Internacional</p>
		
	</div>-->


<?php $this->renderPartial('_form', array('model'=>$model,'Personas'=>$Personas,'Areas'=>$Areas,'Personaslist'=>$Personaslist)); ?>