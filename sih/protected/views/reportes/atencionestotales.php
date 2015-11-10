
<?php

$baseUrl = Yii::app()->baseUrl; 
 
$cs = Yii::app()->getClientScript();
//$cs->registerScriptFile($baseUrl.'/protected/extensions/jtimepicker/jquery.timepicker.js');

$cs->registerScriptFile($baseUrl.'/js/highcharts/highcharts.js');
$cs->registerScriptFile($baseUrl.'/js/highcharts/exporting.js');

$connection = Yii::app()->db;
$terminados = $connection->createCommand("select count(id) as totales from pacientes_aseguradora WHERE fechaFin != '0000-00-00 00:00:00'")->queryRow();
$noterminados = $connection->createCommand("select count(id) as totales from pacientes_aseguradora WHERE fechaFin = '0000-00-00 00:00:00'")->queryRow();



?>


<script type="text/javascript">
  $(function () {

  	var terminados = <?php echo $terminados["totales"]; ?>;
  	var noterminados = <?php echo $noterminados["totales"]; ?>;

    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: false,
            backgroundColor: null
        },
        title: {
            text: '<b>Total de pacientes en proceso y finalizados<br/> <b>total: '+ (terminados+noterminados)+'</b>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }

        },
        series: [{
            type: 'pie',
            name: 'total',
            data: [
                ['Pacientes en proceso ('+noterminados+')',  noterminados ],
                ['Pacientes Finalizados ('+terminados+')',  terminados],
            ]
        }], credits: {
			enabled: false
		},
		legend: {

			enabled: true
		}
    });
});



</script>

<div id="container" style="font-size:10px !important;height:400px;background-color:transparent;width:70%;margin:auto;"></div>