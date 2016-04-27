<?php 
INCLUDE 'rot/connect/base.php';
date_default_timezone_set('Europe/Oslo');
$sth = mysql_query("SELECT UNIX_TIMESTAMP(date) as date, value FROM portefoljeverdi");
	$rows = array();
	while($r = mysql_fetch_assoc($sth)) {
		$verdi=($r['value']/100000);
		$verdi = ($verdi-1)*1000;
		$verdi = $verdi+100;
		//$verdi = 100+$verdi*10;
		$dato=$r['date'];
		//$dato->add(new DateInterval('P1D'));
		$dato *= 1000;
		$data[] = "[$dato, $verdi]";
	}

	/*$fp = fopen('results.json', 'w');
	fwrite($fp, json_encode($data));
	fclose($fp); */
?>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
		<script type='text/javascript'>
$(function() {

		// Create the chart
		Highcharts.setOptions({
    global: {
        useUTC: false
    },
	lang: {
		months: ['Januar', 'Februar', 'Mars', 'April', 'Mai', 'Juni', 
			'Juli', 'August', 'September', 'Oktober', 'November', 'Desember'],
		weekdays: ['Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag']
	}
});
		window.chart = new Highcharts.StockChart({
		    chart: {
		        renderTo: 'container',
				height: 300
		    },
			 xAxis: {
	    	minTickInterval: 24 * 3600 * 1000
	    },

		    rangeSelector: {
		        enabled: false,
				inputEnabled: false
		    },
			exporting: {
				enabled: false
				},
			credits: {
        enabled: false
    },

		    title: {
		        text: 'Veldedighetsfondet'
		    },
			subtitle: {
    text: 'Utvikling i %'
},
			scrollbar: {
			enabled: false
			},
		    
		    series: [{
		        name: 'Fondsverdi (%)',
		        data: [<?php //echo join($data, ',') ?> 100],
		        tooltip: {
		        	valueDecimals: 2
		        }
		    }]
		});
	});
		</script>
<script src='http://code.highcharts.com/stock/highstock.js'></script>
<script src='http://code.highcharts.com/stock/modules/exporting.js'></script>

<div id='container'></div>
