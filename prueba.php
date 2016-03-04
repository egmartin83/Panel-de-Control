<?php
	require_once('config/setup.php');
	require_once("php/data_functions.php");
	$Barracas= data_SCPT_Barracas($dbc);
	$Viale= data_SCPT_Viale($dbc);
	
?>

<!DOCTYPE HTML>
<html>
<head>
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		zoomEnabled: true, 
		title:{
			text: "SCRT - Maquinas Batch"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			legendText: "ARB2",
			showInLegend: true, 
			dataPoints: [
				<?php
					$i=0;
					while($i<sizeof($Barracas)){	
						echo "{ label: '".date_format($Barracas[$i]['Fecha'],'d-m-Y')." - ".date_format($Barracas[$i]['Hora'],'H:i')."', y:".$Barracas[$i]['ARB2']."},";
						$i++;
					}
				?>
			]
		},
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			showInLegend: true, 
			legendText: "ARB3",
			dataPoints: [
				<?php
					$i=0;
					while($i<sizeof($Viale)){	
						echo "{ label: '".date_format($Viale[$i]['Fecha'],'d-m-Y')." - ".date_format($Viale[$i]['Hora'],'H:i')."', y:".$Viale[$i]['ARB3']."},";
						$i++;
					}
				?>
			]
		}
		]
	});
	chart.render();
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
</html>