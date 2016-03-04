<?php
	require_once('config/setup.php');
	require_once(D_CONFIG.'/css.php');
   	require_once(D_CONFIG.'/js.php');
	require_once(C_NAV.'/navbar.php');
	require_once('javascript/app.php');
	require_once('php/data_functions.php');
	$resultado = data_SCPT_Barracas($dbc);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pagina Principal</title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	 	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>		
		
	<body>
		<div class="container">
			
			<h1>Esta es el area de contenido - <?php echo $pageid;?></h1>
			
			<p> 
				<table class="SCPT">
					  <thead>
					  	<tr>
						    <th>Fecha</th>
						    <th>R4 - ARB2</th>
						    <th>R4 - ARO2</th>
					  	</tr>
				</thead>
					<?php
						
						$i=0;
						while($i<sizeof($resultado)){?>
							<tr>
							    <td><?php echo date_format($resultado[$i]['Fecha'],'d-m-Y');?></td>
							    <td><?php echo $resultado[$i]['ARB2'];?></td>
							    <td><?php echo $resultado[$i]['ARO2'];?></td>
						  	</tr>
							<?php
							$i++;
						}
					?>	
				</table>			
			</p>
		</div>
		
		<?php include(C_NAV.'/footer.php');?>
	</body>
	

</html>