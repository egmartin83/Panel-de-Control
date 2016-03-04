<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"> <img src="images/telefonica.png" width=100 max-height= 100% vertical-align= top></span> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Consumos MSU<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?pais=Argentina">ARGENTINA</a></li>
            <li><a href="?pais=Peru">PERU</a></li>
            <li><a href="?pais=Colombia">COLOMBIA</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Inventario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">TASA</a></li>
            <li><a href="#">MOVISTAR</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Riesgos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">MAINFRAME</a></li>
            <li><a href="#">P1</a></li>
            <li><a href="#">AMDOCS</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
  <!-- Esto se activa cuando se selecciona un Pais -->
  <?php
  if(isset($_GET['pais'])){
  	if(isset($_GET['LPAR'])){
  		$LPAR=$_GET['LPAR'];
  	?>
  	
  	<ul class="nav nav-tabs">
	  <li  <?php if($LPAR=="BATCH"){echo 'class="active"';}?>><a href="<?php echo "?pais=".$_GET['pais'];?>&LPAR=BATCH">BATCH</a></li>
	  <li  <?php if($LPAR=="ONLINE"){echo 'class="active"';}?>><a href="<?php echo "?pais=".$_GET['pais'];?>&LPAR=ONLINE">ONLINE</a></li>
	  <li  <?php if($LPAR=="TODAS"){echo 'class="active"';}?>><a href="<?php echo "?pais=".$_GET['pais'];?>&LPAR=TODAS">TODAS</a></li>
	</ul>
  <?php }else{?>
  	<ul class="nav nav-tabs">
		<li class="active"><a href="<?php echo "?pais=".$_GET['pais'];?>&LPAR=BATCH">BATCH</a></li>
		<li><a href="<?php echo "?pais=".$_GET['pais'];?>&LPAR=ONLINE">ONLINE</a></li>
		<li><a href="<?php echo "?pais=".$_GET['pais'];?>&LPAR=TODAS">TODAS</a></li>
	</ul>
 <?php }}?>
</nav>
  

