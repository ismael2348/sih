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

Reporte de atenciones por mes.
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
if($anioy != 0){
 	$info = $connection->createCommand("SELECT count(fechaCreacion) as total, MONTH(fechaCreacion) as aseg FROM pacientes_aseguradora WHERE YEAR(fechaCreacion) = ".$anioy."  GROUP BY MONTH(fechaCreacion) ORDER BY MONTH(fechaCreacion) ASC")->queryAll();

/*

echo "<pre>";
 	print_r($info);
echo "</pre>";*/
//$cats = array();
$valores = "";
if(!empty($info))
foreach ($info as $key => $value) {
	//echo $mitad;
	//array_push($cats,substr($value["aseg"], 0, $mitad)."<br>".substr($value["aseg"], $mitad));
	$valores .="['".$mesesx[$value["aseg"]-1]."',".$value["total"]."],";
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
}
if($anioy != 0 && !empty($info)){
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
            text: 'Pacientes tratados por mes durante el <?php echo $anioy; ?>'
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
            pointFormat: '<b>{point.y}</b> pacientes tratados.</b>'
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

	echo "<br><br>No hay resultados disponibles que concuerden con su busqueda.<br>intente un año diferente.";
}
?>