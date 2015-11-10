<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pacientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Pacientes</h1>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>Paciente</span>',array('pacientes/create')); ?>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pacientes-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		//'id',
		array(
			'class'=>'CButtonColumn', 'template'=>'{update} {view} {Aseguradora}','header'=>'<b>Acciones</b>',//'htmlOptions'=>array('width'=>'90px'),
				'buttons'=>array(
                    'Aseguradora' => array(
                        'label'=>'SEGUIMIENTO', 
                        'url'=>"CHtml::normalizeUrl(array('pacientesAseguradora/create', 'id'=>\$data->id))",
                       // 'imageUrl'=>'images/add.png', // image URL of the button. If not set or false, a text link is used
                      'options' => array('class'=>'seguim'), // HTML options for the button
                    ),
            	),
		),
		'nombre',
		'apMat',
		'apPat',
		'sexo',
		'email',
		'telefono',
		'celular',
		//'depositoRiesgos',
		array(
			'header'=>'¿Dep. riesgos?',
			'value'=>'$data->depositoRiesgos == 1 ? "Si" : "No"',
			'name'=>'depositoRiesgos',
			),
		'montoDepositado',
		'fechaCreacion',
		//'activo',
		//'estadoCivil',
		/*
		'direccion',
		'email2',
		'telefono2',
		'celular2',
		*/
		
	),
)); ?>
