<?php 
	require_once('config/setup.php');
	require_once("php/data_functions.php");
	$pepe= data_SCPT_Barracas($dbc);
	
?>
<html>
  <head>
    <meta charset="utf-8">
        <title>Become a member</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
       
  </head>
  <body>
	
	<canvas id="myChart" width="600" height="400"></canvas>
	<script>
		
		var data = {
	    labels: [
		<?php							
				$i=0;
				while($i<sizeof($pepe)){			
		    		echo "'".$pepe[$i]['fecha_fr']."',";		
					$i++;	
				}
		?>
		],
	    datasets: [
	        {
	            label: "ARB2",
	            fillColor: "rgba(220,220,220,0.2)",
	            strokeColor: "rgba(220,220,220,1)",
	            pointColor: "rgba(220,220,220,1)",
	            pointStrokeColor: "#fff",
	            pointHighlightFill: "#fff",
	            pointHighlightStroke: "rgba(220,220,220,1)",
	            data: [
	            <?php							
					$i=0;
					while($i<sizeof($pepe)){			
		    			echo $pepe[$i]['"R4 - ARB2"'].",";		
					$i++;	
				}
		?>
	            ]
	        },
	        
		    ]
		};
			
		var option ={};
		var ctx = document.getElementById("myChart").getContext('2d');
		var myLineChart = new Chart(ctx).Line(data,option);
	</script>
	

  </body>
</html>