<?php
include('../../db_connect/db.php');

	$vreq_id=$_POST["vreq_id"];
	$stats=$_POST["stats"];
	$desp=$_POST["desp"];
	
	$sql = "update  requestvehicle set stats='$stats',desp='$desp' where vreq_id='$vreq_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../vm_request.php");

?>						
