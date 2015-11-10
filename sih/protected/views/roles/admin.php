<?php




Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#roles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Roles</h1>
<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>Rol</span>',array('roles/create')); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'roles-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} {add} ','header'=>'<b>Acciones</b>','htmlOptions'=>array('width'=>'90px'),
				'buttons'=>array(
                    'add' => array(
                        'label'=>'Agregar permisos', 
                        'url'=>"CHtml::normalizeUrl(array('rolesModulos/create', 'idRol'=>\$data->id))",
                        'imageUrl'=>'images/add.png', // image URL of the button. If not set or false, a text link is used
                      //'options' => array('class'=>'add'), // HTML options for the button
                    ),
            	),
		),
		array(
            'header' => '<b>Nombre del Rol</b>',
            'name' => 'nombre'
        ),
        array(
            'header' => '<b>Modulos Vinculados</b>',
            'value' => array($this,'modulosRelacionados'),'type'=>'raw'
        ),

	),
)); ?>
