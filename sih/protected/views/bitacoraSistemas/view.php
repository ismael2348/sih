<?php echo CHtml::link('<span class="botonAccion Back" style="width:125px;">Gestión de<br>Bitacora</span>',array('bitacoraSistemas/admin')); ?>
	<br><br>
<h1>Detalles del ID:#<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
array(	"name"=>'Codigo',
			"value"=>$model->idCodigo->nombre),

array(	"name"=>'Area',
			"value"=>$model->idArea->nombre),
	
/*array(	"name"=>'Articulo',
			"value"=>$model->idArt->equipo),

array(	"name"=>'Consumible',
			"value"=>$model->idConsumible->consumible_de),*/

array(	"name"=>'Reporto',
			"value"=>$model->idPersonaRepo->nombres." ".$model->idPersonaRepo->ap_pat." ".$model->idPersonaRepo->ap_mat),


		'personaAtendio',
		'personaSolu',
		'descripcionSolucion',
		'comentarios',
		
		'fechaCreacionReg',
		'fechaSolucion'
	),
)); ?>
