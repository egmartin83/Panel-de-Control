<?php
	require_once('config/setup.php');
	require_once("php/data_functions.php");
	$Barracas= "data_SCPT_Barracas_Argentina($dbc);";
	$Viale="#$Barracas= data_SCPT_Barracas_Argentina($dbc)";

	switch ($paisEjecutor) {
		case 'Argentina':
			#$Barracas= data_SCPT_Barracas_Argentina($dbc);
			#$Viale= data_SCPT_Viale_Argentina($dbc);
			$SCPT =data_SCPT_Argentina($dbc);
			
			switch ($LPAR) {
				case 'BATCH':
					$lparBarracas="ARB2";
					$lparViale="ARB3";
					break;
				case 'ONLINE':
					$lparBarracas="ARO2";
					$lparViale="ARO3";
					break;
				case 'TODAS':
					$lparBarracas="TotalBarracas";
					$lparViale="TotalViale";
					break;
			}
		case 'Peru':
			#$Barracas= data_SCPT_Barracas_Argentina($dbc);
			#$Viale= data_SCPT_Viale_Argentina($dbc);
			$SCPT =data_SCPT_Peru($dbc);			
			switch ($LPAR) {
				case 'BATCH':
					$lparBarracas="PEBQ";
					$lparViale="PEBS";
					break;
				case 'ONLINE':
					$lparBarracas="PEOQ";
					$lparViale="PEOS";
					break;
				case 'TODAS':
					$lparBarracas="TotalBarracas";
					$lparViale="TotalViale";
					break;
			}
		case 'Colombia':
			#$Barracas= data_SCPT_Barracas_Argentina($dbc);
			#$Viale= data_SCPT_Viale_Argentina($dbc);
			$SCPT =data_SCPT_Colombia($dbc);			
			switch ($LPAR) {
				case 'BATCH':
					$lparBarracas="COBT";
					$lparViale="COBU";
					break;
				case 'ONLINE':
					$lparBarracas="COOT";
					$lparViale="COOU";
					break;
				case 'TODAS':
					$lparBarracas="TotalBarracas";
					$lparViale="TotalViale";
					break;
			}
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