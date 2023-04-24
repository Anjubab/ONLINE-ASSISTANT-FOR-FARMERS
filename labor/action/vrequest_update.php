<?php
include('../../db_connect/db.php');

	$lbrrid=$_POST["lbrrid"];
	$stats=$_POST["stats"];
	$desp=$_POST["desp"];
	
	$sql = "update  lbrequest set stats='$stats',desp='$desp' where lbrrid='$lbrrid'";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../labor_requestst.php");

?>						
