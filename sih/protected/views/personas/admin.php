<?php
/* @var $this PersonasController */
/* @var $model Personas */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Empleados</h1>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>empleado</span>',array('personas/create')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personas-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
			//'class'=>'CButtonColumn',
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} {view} ','header'=>'<b>Acciones</b>',//'htmlOptions'=>array('width'=>'90px'),
		),

		//'id_area_puesto',
		array(
		'name'=>'id_area_puesto',
            'header' => '<b>Puesto y Área</b>',
            'value' => array($this,'AreaPuesto'),'type'=>'raw'
        ),
		array(
			'name'=>'id_turno',
            'header' => '<b>Turno</b>',
            'value' => array($this,'turno'),'type'=>'raw'
        ),
		//'id_turno',
		'nss',
		'seguroActivo',
		array(
            'header' => '<b>Nombre completo</b>',
            'value' => '$data->ap_pat." ".$data->ap_mat." ".$data->nombres'
        ),
		//'nombres',
		//'ap_pat',
		//'ap_mat',
		'fecha_nac',
		array(
            'header' => '<b>Correo Electrónico</b>',
            'value' => '$data->idPersonasInfo["email"]'
        ),
		array(
            'header' => '<b>Teléfono</b>',
            'value' => '$data->idPersonasInfo["telefono"]'
        ),
		array(
            'header' => '<b>Célular</b>',
            'value' => '$data->idPersonasInfo["celular"]'
        ),
        'fecha_ingreso',
       //'PersonasInfo["email"]',
		/*
		'rfc',
		'curp',
		'sexo',
		'estado_civil',
		'escolaridad',
		
		'fecha_creacion',

		'id_personas_info',

		'activo',
		*/

	),
)); ?>
