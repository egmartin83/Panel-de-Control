<?php
	require_once('config/setup.php');
	require_once("php/data_functions.php");

	if($presentacion=='true'){
		
	}
			
	
?>
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
			legendText: "<?php echo $lparBarracas;?>",
			showInLegend: true, 
			dataPoints: [
				<?php
					$i=0;
					while($i<sizeof($SCPT)){	
						echo "{ label: '".date_format($SCPT[$i]['Fecha'],'d-m-Y')." - ".date_format($SCPT[$i]['Hora'],'H:i')."', y:".$SCPT[$i][$lparBarracas]."},";
						$i++;
					}
				?>
			]
		},
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			showInLegend: true, 
			legendText: "<?php echo $lparViale;?>",
			dataPoints: [
				<?php
					$i=0;
					while($i<sizeof($SCPT)){	
						echo "{ label: '".date_format($SCPT[$i]['Fecha'],'d-m-Y')." - ".date_format($SCPT[$i]['Hora'],'H:i')."', y:".$SCPT[$i][$lparViale]."},";
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