
<?php echo CHtml::link('<span class="botonAccion Back">Gestión <br> de Roles</span>',array('roles/admin')); ?>
<br><br>




<h1>Registro de Roles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>