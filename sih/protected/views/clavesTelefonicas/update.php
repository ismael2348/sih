<?php
/* @var $this ClavesTelefonicasController */
/* @var $model ClavesTelefonicas */

$this->breadcrumbs=array(
	'Claves Telefonicases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);


?>

<h1>Esta editando la clave de: <?php echo("<big><b style=color:#65A8A1;>".$model->idPersona->nombres." ".$model->idPersona->ap_pat." ".$model->idPersona->ap_mat)."</b></big>"; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'Personas'=>$Personas, 'Areas'=>$Areas,'Personaslist'=>$Personaslist)); ?>