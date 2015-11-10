
<h1>Gestión de Aseguradoras</h1>
	<?php 
	
	if(array_key_exists("JURIDICO", Yii::app()->user->permisos) && Yii::app()->user->permisos["JURIDICO"][1] == "1")
		echo CHtml::link('<span class="botonAccion Add" style="width:125px;">Registrar<br>Aseguradora</span>',array('aseguradoras/create')); 

	?>	
<br>

<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array('model'=>$model,)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aseguradoras-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		//'id',
		array(
			'class'=>'CButtonColumn', 'template'=>'{update} {view} ','header'=>'<b>Acciones</b>',
				'buttons'=>array(
                    'update' => array(
                        'label'=>'update', 
                         'visible'=>'(array_key_exists("JURIDICO", Yii::app()->user->permisos) && Yii::app()->user->permisos["JURIDICO"][2] == "1")',
                    ),
            	),
		),
		'nombre',
		'direccion',
		'domicilioFiscal',
		'rfc',
		'email',
		'direccionWeb',
		//'celular',
		'fecha_reg',
		/*'email2',
		'telefono',
		'telefono2',
		'celular2',
		'observaciones',
		
		'activo',
		*/
		
	),
)); ?>
