<?php

#######################################################################################################################################
#                                                         ARGENTINA
#######################################################################################################################################
function data_SCPT_Barracas_Argentina($dbc){
	$query = "SELECT *
			  FROM vw_Barracas_SCPT_Argentina
			  ORDER BY [Fecha],[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}

function data_SCPT_Viale_Argentina($dbc){
	$query = "SELECT *
			  FROM vw_Viale_SCPT_Argentina
			  ORDER BY [Fecha],[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}
function data_SCPT_Argentina($dbc){
	$query = "select t1.[Fecha],t1.[Hora],t1.ARB2, t1.ARO2, t1.Total as TotalBarracas,
	isnull(t2.ARB3,0) as ARB3, ISNULL(t2.ARO3,0)AS ARO3, ISNULL(t2.ARTJ,0) AS ARTJ, isnull(t2.Total,0) as TotalViale
  FROM vw_Barracas_SCPT_Argentina t1 left join vw_Viale_SCPT_Argentina t2 on t1.Fecha=t2.Fecha and t1.Hora=t2.Hora
  ORDER BY t1.[Fecha],t1.[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}
#######################################################################################################################################
#                                                         PERU
#######################################################################################################################################
function data_SCPT_Barracas_Peru($dbc){
	$query = "SELECT *
			  FROM vw_Barracas_SCPT_Peru
			  ORDER BY [Fecha],[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}

function data_SCPT_Viale_Peru($dbc){
	$query = "SELECT *
			  FROM vw_Viale_SCPT_Peru
			  ORDER BY [Fecha],[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}
function data_SCPT_Peru($dbc){
	$query = " select t1.[Fecha],t1.[Hora],t1.PEBQ, t1.PEOQ,t1.PEDP, t1.Total as TotalBarracas,
  isnull(t2.PEBS,0) as PEBS, ISNULL(t2.PEOS,0)AS PEOS, isnull(t2.Total,0) as TotalViale
  FROM vw_Barracas_SCPT_Peru t1 left join vw_Viale_SCPT_Peru t2 on t1.Fecha=t2.Fecha and t1.Hora=t2.Hora
  ORDER BY t1.[Fecha],t1.[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}
#######################################################################################################################################
#                                                         COLOMBIA
#######################################################################################################################################
function data_SCPT_Barracas_Colombia($dbc){
	$query = "SELECT *
			  FROM vw_Barracas_SCPT_Colombia
			  ORDER BY [Fecha],[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}

function data_SCPT_Viale_Colombia($dbc){
	$query = "SELECT *
			  FROM vw_Viale_SCPT_Colombia
			  ORDER BY [Fecha],[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}
function data_SCPT_Colombia($dbc){
	$query = " select t1.[Fecha],t1.[Hora],t1.COBT, t1.COOT, t1.Total as TotalBarracas,
  isnull(t2.COBU,0) as COBU, ISNULL(t2.COOU,0)AS COOU, ISNULL(t2.CODD,0)AS CODD,isnull(t2.Total,0) as TotalViale
  FROM vw_Barracas_SCPT_Colombia t1 left join vw_Viale_SCPT_Colombia t2 on t1.Fecha=t2.Fecha and t1.Hora=t2.Hora
  ORDER BY t1.[Fecha],t1.[Hora]";
	$result = sqlsrv_query( $dbc, $query);
	
	if( $result === false ) {
     	die( print_r( sqlsrv_errors(), true));	
	}
	
	$resultado = array();
	while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {
    	#echo $row['"Date-Time of RMF Interval"'];
		$resultado[]=$row;
	}
	
	return $resultado;
}

#######################################################################################################################################
#                                                         SCRT
#######################################################################################################################################


?>