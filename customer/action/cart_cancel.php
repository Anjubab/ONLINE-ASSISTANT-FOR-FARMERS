<?php
include('../../db_connect/db.php');

	$cart_id=$_GET["cart_id"];
	
	$sql = "delete from cart where cart_id='$cart_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../cart_view.php");

?>						
