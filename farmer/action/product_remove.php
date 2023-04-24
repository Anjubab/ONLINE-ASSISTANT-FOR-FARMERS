<?php
	include("../../db_connect/db.php");	
	
	$p_id=$_GET["p_id"];
	
	$sql = "delete from product where p_id='$p_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	

	header("location:../product_remove.php");
?>
