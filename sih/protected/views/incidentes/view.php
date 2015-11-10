<?php
/* @var $this IncidentesController */
/* @var $model Incidentes */
?>

<h1>Incidentes </h1>

<div class="lista">
<?php 

foreach($incidentes AS $indice => $incidente){
	?>
	<span class='listaItem'>
		Folio: <?php echo $incidente["folio"]; ?> Estado:  <?php echo $incidente["estado"]; ?> ENVIADO:  <?php echo $incidente["fecha_creacion"]; ?><br>
		Area:  <?php echo $incidente["para_id_area"]; ?> <br>
		 <?php echo substr($incidente["descripcion"], 0,50); ?> ...
	</span>	
<?php
}
?>
</div>



<div class="incidenteWrapper">
	<div class="incidente">
			Folio: DIR140831-0007 
			<br>Estado: ABierto <br>
			<br>ENVIADO: 01-03-2014 
			<br>CIERRE: 10
			<br>Total Seguimientos: 01-04-2014<br><br>
			Area: DIRECCION <br>
			Descripción:<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

	<div class="seguimientos">
	<span class="listaItem">
CREACION: 01-03-2014<br>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ...
	</span>
	<span class="listaItem">
		CREACION: 01-03-2014<br>

		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</span>	
		<span class="listaItem">
		CREACION: 01-03-2014<br>

		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</span>

	</div>
</div>
<!--
ID	7<br>
Folio	DIR140831-0007<br>
Usuarios que envia	2<br>
Área de envio	2<br>
Asunto	asunto de prueba numero ocho<br>
Descripción	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
Fecha de Envio	2014-08-31 17:50:01<br>
Fecha Cierre	No asignado<br>
Estado	ABIERTO<br>
Activo	1<br>
-->
<?php /* $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'folio',
		'de_id_usuario',
		'para_id_area',
		'asunto',
		'descripcion',
		'fecha_creacion',
		'fecha_cierre',
		'estado',
		'activo',
	),
)); */ ?>
