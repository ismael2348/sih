
<?php echo CHtml::link('<span class="botonAccion Back">Lista de<br>Extensión</span>',array('inventExtensiones/admin')); ?>
<br><br>
<h1>Registro de  Extensiones</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'InventIp'=>$InventIp,'Areas'=>$Areas)); ?>