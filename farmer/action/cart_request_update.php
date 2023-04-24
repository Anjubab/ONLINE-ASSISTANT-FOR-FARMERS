<?php
include('../../db_connect/db.php');

	$cart_id=$_POST["cart_id"];
	$stats=$_POST["stats"];
	$desp=$_POST["desp"];
	
	$sql = "update  cart set stats='$stats',desp='$desp' where cart_id='$cart_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../cart_view.php");

?>						
