<?php

#Database Connection
$serverName = "TSRAS01"; //serverName\instanceName
$connectionInfo = array( "Database"=>"SCPT");

#para usuario y contraseña
#$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");

$dbc = sqlsrv_connect( $serverName, $connectionInfo);
if( $dbc ) {
     #echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

#CONSTANTES
DEFINE("C_TEMPLATE","template");
DEFINE("C_NAV","navigation");
DEFINE("D_CONFIG","config");

# Functions:

#pagina principal por default
if(isset($_GET['page'])){	
	$pageid=$_GET['page'];
}else{
	$pageid=1;
}

?>