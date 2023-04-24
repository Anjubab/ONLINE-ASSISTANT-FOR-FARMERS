<?php
include('../../db_connect/db.php');

	
	
	$Log_Id=$_POST["Log_Id"];
	
	$name=$_POST["name"];
	$qty=$_POST["qty"];
	$prce=$_POST["prce"];
	$date=$_POST["date"];
	$desp=$_POST["desp"];
	
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../vphoto/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	
	$sql = "insert into product(Log_Id,name,qty,prce,date,photo,desp)values('$Log_Id','$name','$qty','$prce','$date','$photo','$desp')";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../product_search.php");

?>						
