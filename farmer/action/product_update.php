<?php
include('../../db_connect/db.php');


	
	
	
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
	
		
	
	if($photo=="")
	{
	$sql = "update product set qty='$qty',prce='$prce',date='$date',desp='$desp' where name='$name'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	else
	{
		$sql = "update product set qty='$qty',prce='$prce',date='$date',desp='$desp',photo='$photo' where name='$name'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}

	header("location:../product_search.php");

?>						
