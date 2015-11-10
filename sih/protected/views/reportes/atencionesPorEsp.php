<?php
$baseUrl = Yii::app()->baseUrl;  
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/highcharts/highcharts.js');
$cs->registerScriptFile($baseUrl.'/js/highcharts/exporting.js');
$mesesx = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

$connection = Yii::app()->db;
$anios = $connection->createCommand("SELECT DISTINCT YEAR(fechaCreacion) as anio FROM pacientes_aseguradora WHERE YEAR(fechaCreacion) != 0")->queryAll();
$anioy = isset($_POST["y"]) ? (int)strip_tags(trim($_POST["y"])) : 0;
$mesm = isset($_POST["m"]) ? (int)strip_tags(trim($_POST["m"])) : 0;

//print_r($anioy);
?>


Reporte de Especialidades.
<br><hr>
<form action="" method="post">
Seleccione un año: 
<select style="width:80px;" onchange="this.form.submit()" name="y">
<option></option>
	<?php 
	foreach($anios as $anio)
		echo "<option ".($anioy > 0 && $anioy == $anio["anio"] ? "selected" : "").">".$anio["anio"]."</option>";
	?>
</select>
<?php

if($anio > 0){
	$meses = $connection->createCommand("SELECT DISTINCT MONTH(fechaCreacion) as mes FROM pacientes_aseguradora WHERE MONTH(fechaCreacion) != 0 AND YEAR(fechaCreacion) = ".$anioy)->queryAll();

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Seleccione un mes: 
<select style="width:120px;" onchange="this.form.submit()" name="m">
<option></option>
	<?php 
	foreach($meses as $mes)
		echo "<option value='".($mes["mes"]+1)."' ".($mesm > 0 && $mesm == $mes["mes"]+1 ? "selected" : "")." >".$mesesx[$mes["mes"]]."</option>";
	?>
</select>
<?php 
}
?>
</form>

<?php
 //echo "su anio ".$anioy." y su mes ".$mesm;

 	$info = $connection->createCommand("SELECT count(especialidad) as total, especialidad as aseg FROM pacientes_aseguradora WHERE MONTH(fechaCreacion) = ".$mesm." AND YEAR(fechaCreacion) = ".$anioy." GROUP BY especialidad ORDER BY total DESC")->queryAll();

/*

echo "<pre>";
 	print_r($info);
echo "</pre>"; */
//$cats = array();
$valores = "";
foreach ($info as $key => $value) {
	$mitad = strrpos(substr($value["aseg"], 0, floor(strlen($value["aseg"]) / 2)), ' ') + 1;
	//echo $mitad;
	//array_push($cats,substr($value["aseg"], 0, $mitad)."<br>".substr($value["aseg"], $mitad));
	$valores .="['".($value["aseg"] == "" ? "Otra" : $value["aseg"])."',".$value["total"]."],";
}
$valores.="";
/*
$valores = "";
foreach($datos as $llave => $valor){
	$valores.="[".$valor.", ".$valor."], "; }
echo $valores;

echo "<hr><pre>";
 	print_r($cats);
echo "</pre><hr>";
echo $valores;*/
//echo $mesm." - ".$anioy;
if($mesm != 0 && $anioy != 0 && !empty($info)){
?>
<br>
<hr>

<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        plotOptions: {
                column: {
                    colorByPoint: true
                }
            },
            colors: [
                '#00A0B0',
                '#6A4A3C',
                '#CC333F',
                '#EB6841',
                '#EDC951',
                '#D9AD8B',
                '#BBD1A9',
                '#A15A68',
                '#77A653',
                '#4D51B0',
            ],
        title: {
            text: 'Pacientes tratados por especialidad el mes <?php echo $mesesx[$mesm-1]." del ".$anioy; ?>'
        },
         subtitle: {
            text: 'Hospital siloé'
        },
        credits: {
    		enabled: false
  		},
        xAxis: {
            type: 'category',
            labels: {
                rotation: 0,
                style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Pacientes'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '<b>{point.y} pacientes</b>'
        },
        series: [{
            name: 'Pacientes tratados',
            data: [<?php echo $valores; ?>],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#000',
                align: 'center',
                x: 4,
                y: 10,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Verdana, sans-serif',
                    textShadow: '0 0 3px #ccc'
                }
            }
        }],



    });

});
</script>

<div id="container" style="font-size:10px !important;height:400px;background-color:transparent;width:90%;margin:auto;"></div>

<?php
}else{

	echo "<br><br>No hay resultados disponibles que concuerden con su busqueda.<br>intente parametros diferentes tanto en año y mes.";
}
?>