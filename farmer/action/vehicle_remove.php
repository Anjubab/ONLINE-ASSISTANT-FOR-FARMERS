<?php
	include("../../db_connect/db.php");	
	
	$v_id=$_GET["v_id"];
	
	$sql = "delete from vehicle where v_id='$v_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	

	header("location:../vehicle_remove.php");
?>
