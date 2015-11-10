
<?php 
$usuario = Usuarios::model()->findByPk(Yii::app()->user->id);
$persona = Personas::model()->findByPk($usuario["id_persona"]);
$personaInfo = PersonasInfo::model()->findByPk($persona["id_personas_info"]);


?>

<div style="float:left;width:33%;border:0px solid red;">
<b>DATOS PERSONALES</b><hr>
<b>NOMBRE: </b><?php echo $persona["nombres"]." ".$persona["ap_pat"]." ".$persona["ap_mat"]; ?><br>
<b>FECHA DE NACIMIENTO: </b><?php echo $persona["fecha_nac"]; ?><br>
<b>NÚMERO DE SEGURO SOCIAL: </b><?php echo $persona["nss"]; ?><br>
<b>RFC: </b><?php echo $persona["rfc"]; ?><br>
<b>CURP: </b><?php echo $persona["curp"]; ?><br>
<b>SEXO: </b><?php echo $persona["sexo"]; ?><br>
<b>ESTADO CIVIL: </b><?php echo $persona["estado_civil"]; ?><br>
<b>ESCOLARIDAD: </b><?php echo $persona["escolaridad"]; ?><br>

<br><br><b>DIRECCIÓN</b>
<hr>
<b>CALLE Y NÚMERO: </b><?php echo $personaInfo["calle_num"]; ?><br>
<b>COLONIA: </b><?php echo $personaInfo["colonia"]; ?><br>
<b>CÓDIGO POSTAL: </b><?php echo $personaInfo["cp"]; ?><br>
<b>MUNICIPIO: </b><?php echo $personaInfo["municipio"]; ?><br>
<b>ESTADO: </b><?php echo $personaInfo["estado"]; ?><br>
<b>CORREO: </b><?php echo $personaInfo["email"]; ?><br>
<?php echo !empty($personaInfo["email2"]) ? "<b>CORREO 2:</b> ".$personaInfo["email2"]."<br>" : ""; ?>
<b>TELÉFONO: </b><?php echo $personaInfo["telefono"]; ?><br>
<?php echo !empty($personaInfo["telefono2"]) ? "<b>TELÉFONO 2:</b> ".$personaInfo["telefono2"]."<br>" : ""; ?>
<b>CELULAR: </b><?php echo $personaInfo["celular"]; ?><br>
<?php echo !empty($personaInfo["celular2"]) ? "<b>CELULAR 2:</b> ".$personaInfo["celular2"]."<br>" : ""; ?>


</div>
<div style="float:left;width:32%;border:0px solid red;">
<b>DATOS DE EMPLEADO</b><hr>
<b>FECHA DE INGRESO: </b><?php echo $persona["fecha_ingreso"]; ?><br>
<b>AREA: </b><?php echo Puestos::model()->findByPk(AreasPuestos::model()->findByPk($persona["id_area_puesto"])->id_puesto)->nombre; ?><br>
<b>PUESTO: </b><?php echo Areas::model()->findByPk(AreasPuestos::model()->findByPk($persona["id_area_puesto"])->id_area)->nombre; ?><br>
<b>TURNO: </b><?php echo Turnos::model()->findByPk($persona["id_turno"])->nombre; ?><br>

<br><br><b>DATOS DE CUENTA</b><hr>

<b>USUARIO: </b><?php echo $usuario["usuario"]; ?><br>
<b>ROL: </b><?php echo Roles::model()->findByPk($usuario["id_rol"])->nombre; ?><br>
<b>FECHA DE EXPIRACIÓN DEL ACCESO: </b><?php echo $usuario["fecha_expiracion"]; ?><br>

</div>

<div style="float:left;width:33%;border:0px solid red;">
<b>ACCESOS</b><hr>
<?php

$permisos = RolesModulos::model()->findAllByAttributes(array("id_rol"=>$usuario["id_rol"]));

echo "PUESTO: ".Roles::model()->findByPk($usuario["id_rol"])->nombre;
echo"<br><br>ACCESOS:<br>";
foreach($permisos as $valor)
	echo "<br>".Modulos::model()->findByPk($valor["id_modulo"])->nombre;//$valor["permisos"]."<br>";


?>
</div>


