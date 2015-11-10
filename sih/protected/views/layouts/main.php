<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap-3.0.0/css/bootstrap.min.css" media="screen, projection" >
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/personalizado.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/extensions/jtimepicker/jquery.timepicker.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>

<?php yii::app()->getClientScript()->registerCoreScript('jquery'); ?>
<?php $this->widget('ext.etooltipster.EToolTipster', array('target' => '.tooltip','options' => array('theme' => 'tooltipster-shadow','animation'=>'fall','position'=>'left'))); ?>
	<ul class="menu">
		<?php if(!Yii::app()->user->isGuest){ ?>
		<?php if(array_key_exists("REPORTES", Yii::app()->user->permisos)){ ?>
	<li><a href="#">Reportes</a>
		<ul>
			<li><?php echo CHtml::link('Atenciones totales',array('reportes/atencionesTotales')); ?></li>
			<li><?php echo CHtml::link('Aten. por mes',array('reportes/atencionesPorMes')); ?></li>
			<li><?php echo CHtml::link('Aten. por aseguradora',array('reportes/atencionesPorAseg')); ?></li>
			<li><?php echo CHtml::link('Aten. por especialidad',array('reportes/atencionesPorEsp')); ?></li>
			<li><?php echo CHtml::link('honorarios por mes',array('reportes/atencionesPorHon')); ?></li>
			<li><?php echo CHtml::link('prov. por atenciones',array('reportes/atencionesPorPro')); ?></li>
			<li><a href="#">Entradas</a></li>
		</ul>
	</li>
	<?php } ?>
	<?php if(array_key_exists("INCIDENCIAS", Yii::app()->user->permisos)){ ?>
	<li><a href="#">Incidencias</a>
		<ul>	
		<li><?php echo CHtml::link('Crear Incidente',array('incidentes/create')); ?></li>
		<li><?php echo CHtml::link('Incidentes Recibidos',array('incidentes/incoming')); ?></li>
		</ul>
	</li>
	<?php } ?>
	<?php if(array_key_exists("GESTION DE PERSONAL", Yii::app()->user->permisos)){?>
	<li><a href="#">Administración</a>
		<ul>	
			<li><?php 
				echo array_key_exists("GESTION DE PERSONAL", Yii::app()->user->permisos) ? CHtml::link('GESTIÓN DE PERSONAL',array('personas/admin')) : ""; 
			?></li>
		</ul>
	</li>
	<?php } ?>
	<?php if(array_key_exists("TESORERIA", Yii::app()->user->permisos)){ ?>
	<li><a href="#">TESORERIA</a>
		<ul>	
			<li style="height:30px;"><?php echo CHtml::link('GESTIÓN DE PACIENTES CON ASEGURADORA',array('pacientesAseguradora/admin')); ?></li>
			<li><?php echo CHtml::link('GESTIÓN DE ASEGURADORAS',array('aseguradoras/admin')); ?></li>

			
		</ul>
	</li>
	<?php } ?>
		<?php if(array_key_exists("ADMISION", Yii::app()->user->permisos)){ ?>
		<li><a href="#">ADMISIÓN</a>
		<ul>
		<li><?php echo CHtml::link('GESTIÒN DE PACIENTES',array('pacientes/admin')); ?></li>
		<li><?php echo CHtml::link('GESTIÓN DE SEGUROS DE PACIENTE',array('pacientesAseguradora/admin')); ?></li><br><br><br>
		<li><?php echo CHtml::link('GESTIÓN DE ASEGURADORAS',array('aseguradoras/admin')); ?></li>
		</ul>
		</li>
		<?php } ?>
	<?php if(array_key_exists("JURIDICO", Yii::app()->user->permisos)){ ?>
	<li><a href="#">JURIDICO</a>
		<ul> <?php if(array_key_exists("GESTION DE ASEGURADORAS", Yii::app()->user->permisos)){ ?>
			<li><?php echo CHtml::link('GESTIÓN DE ASEGURADORAS',array('aseguradoras/admin')); ?></li>
			<?php } ?>
			<?php if(array_key_exists("GESTION DE SEGURO DE PACIENTE", Yii::app()->user->permisos)){ ?>
			<li><?php echo CHtml::link('GESTIÓN DE SEGURO DE PACIENTE',array('pacientesAseguradora/admin')); ?></li>
			<?php } ?>
		</ul>
	</li>
	<?php } ?>
	<!--<?php // if(array_key_exists("INVENTARIO", Yii::app()->user->permisos)){ ?>
	<li><a href="#">inventario</a>
		<ul>
			<li><?php /* echo CHtml::link('Categoria de articulos',array('artCategorias/admin')); ?></li>
			<li><?php echo CHtml::link('Alta de Articulos',array('articulos/admin')); ?></li>
			<li><?php echo CHtml::link('Localizacion Equipos',array('artLocalizacion/admin')); ?></li>
			<li><?php echo CHtml::link('Stock',array('artStock/admin')); */ ?></li>
		</ul>
	</li>
	<?php // } ?>-->

	<?php // print_r(Yii::app()->user->permisos["TESORERIA"][2]); ?>

	<?php if(array_key_exists("SISTEMAS", Yii::app()->user->permisos)){ ?>
	<li><a href="#">Sistemas Administracion</a>
	<ul>
		<li><?php echo CHtml::link('Gestión de Usuarios',array('usuarios/admin')); ?></li>
		<li><?php echo CHtml::link('Gestión de Modulos',array('modulos/admin')); ?></li>
		<li><?php echo CHtml::link('Gestión de Roles',array('roles/admin')); ?></li>
		<li><?php echo CHtml::link('GESTIÓN DE TURNOS',array('turnos/admin')); ?></li>
		<li><?php echo CHtml::link('GESTIÓN DE ÁREAS',array('areas/admin')); ?></li>
		<li><?php echo CHtml::link('Gestión de IPS',array('inventIp/admin')); ?></li>
		<li><?php echo CHtml::link('Gesión de Extensiones',array('inventExtensiones/admin')); ?></li>
		<li><?php echo CHtml::link('Gesión de Documentos',array('documentos/admin')); ?></li>

			
		</ul>
	</li>
	<?php } ?>

	<?php if(array_key_exists("CHOPO", Yii::app()->user->permisos)){ ?>
	<li><a href="#">CHOPO</a>
		<ul>
			<li><?php echo CHtml::link('Conversiónes',array('conversion/admin')); ?></li>
		</ul>
	</li>
	<?php } ?>

	<?php if(array_key_exists("SISTEMAS", Yii::app()->user->permisos)){ ?>
	<li><a href="#">Registros de Informacion</a>
		<ul>
			<li><?php echo CHtml::link('Claves Telefonicas',array('ClavesTelefonicas/admin')); ?></li>
			<li><?php echo CHtml::link('Serv.Respaldos',array('informacionRespaldosSrv/admin')); ?></li>
			<li><?php echo CHtml::link('Inventario Consumibles',array('stockImpresora/admin')); ?></li>
			<li><?php echo CHtml::link('Inventario Equipos',array('inventarioEquipoSistemas/admin')); ?></li>
			<li><?php echo CHtml::link('Bitacora',array('bitacoraSistemas/admin')); ?></li>
			<li><?php echo CHtml::link('Gestion de Codigos',array('catalogoCodigosSistemas/admin')); ?></li>
			<li><?php echo CHtml::link('Conversiones',array('conversion/admin')); ?></li>

		</ul>
	</li>
	<?php } ?>
		<?php } ?>
	<li>
		<?php echo Yii::app()->user->isGuest ? CHtml::link('Iniciar Sesión',array('site/login')) : ""; ?>
	</li>
	<li>
		<li><?php echo CHtml::link('Inicio',array('site/index')); ?></li>
	</li>
</ul>


	

<header>
<span id="logo">
	
</span>
<span id="titulos">
	<span id="titulo">HOSPITAL SILOÉ</span>
	<span id="subtitulo"> GESTIÓN INTEGRAL HOSPITALARIA</span>
	<?php if(!Yii::app()->user->isGuest){ ?>
		<span id="loginfo">  
		<?php echo  CHtml::link("BIENVENIDO ".Yii::app()->user->datosPersonales."<br>".Yii::app()->user->areaPuesto,array('personas/infopersonal'), array('class' => 'tooltip','title' => 'Haga clic para ver su información.')); 
		//echo "<br> PUESTO: ".explode(",", Yii::app()->user->datos)[2]." EN EL ÁREA DE ".explode(",", Yii::app()->user->datos)[1];
		?>
		<br /><?php echo CHtml::link('CERRAR SESIÓN',array('site/logout')); ?>
		</span>
	<?php } ?>
</span>
</header>
<main>

<!--informacion de cuenta-->
<?php echo $content; ?>


</main>
	<footer>
	HOSPITAL SILOÉ<br>
		<a href="http://www.freeravens.com" target="_blank">DESARROLLADO POR FREERAVENS.COM</BR>
		TODOS LOS DERECHOS RESERVADOS FREERAVENS</a>
	</footer>
</body>

</html>
