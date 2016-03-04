<!DOCTYPE html>
<html lang="en">
<head>
  <title>Panel de control</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include("config/setup.php");?>
  <!--<?php include("templates/linechart.php"); ?> -->
</head>
<body>
	<?php include("navigation/navbar.php");?>

	 <?php 
	 if(isset($_GET['pais'])){
		 $paisEjecutor=$_GET['pais'];
		 if(isset($_GET['LPAR'])){
			 $LPAR=$_GET['LPAR'];
			include("templates/linechart.php");	 
	 ?>
		<div class="container">
			<div class="jumbotron">
		  		<div class="container text-center">
		    		<br><br>
		    		<h2> MAINFRAME - Consumo media movil 4 hs</h2>      
		    		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
		 		 </div>
			</div>
		</div>
	<?php }}?>
</body>
</html>