<?php
	include("../../db_connect/db.php");	
	
	$m_id=$_GET["m_id"];
	
	$sql = "delete from machine where m_id='$m_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	

	header("location:../machine_remove.php");
?>
