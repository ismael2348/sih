
<?php
/* @var $this AreasController */
/* @var $model Areas */

?>

<h1>GESTIÓN DE AREAS Y PUESTOS</h1>

<?php echo CHtml::link('<span class="botonAccion Add">Registrar<br>área</span>',array('areas/create')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'areas-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} {add} ','header'=>'<b>Acciones</b>','htmlOptions'=>array('width'=>'90px'),
				'buttons'=>array(
                    'add' => array(
                        'label'=>'Agregar Nuevo Puesto', 
                        'url'=>"CHtml::normalizeUrl(array('areasPuestos/create', 'id'=>\$data->id))",
                        'imageUrl'=>'images/add.png', // image URL of the button. If not set or false, a text link is used
                      //'options' => array('class'=>'add'), // HTML options for the button
                    ),
            	),
		),
		//'id',
		'nombre',
		//'estatus',
		array(
            'header' => '<b>Puestos Vinculados</b>',
            'value' => array($this,'puestosRelacionados'),'type'=>'raw'
        ),

	),
)); ?>
