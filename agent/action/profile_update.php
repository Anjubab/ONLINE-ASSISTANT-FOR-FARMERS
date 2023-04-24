<?php
include('../../db_connect/db.php');


	$Log_Id=$_POST["Log_Id"];		
	$name=$_POST["name"];		
	$edate=$_POST["edate"];
	$location=$_POST["location"];
	$addrs=$_POST["addrs"];
	$email=$_POST["email"];
	$phno1=$_POST["phno1"];
	$phno2=$_POST["phno2"];
	$wrk=$_POST["wrk"];
	$expr=$_POST["expr"];
	
	
	$password=$_POST["password"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	if($photo=="")
	{
	$sql = "update agent set name='$name',edate='$edate',location='$location',addrs='$addrs',email='$email',phno1='$phno1',phno2='$phno2',wrk='$wrk',expr='$expr' where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	else
	{
	$sql = "update agent set name='$name',edate='$edate',location='$location',addrs='$addrs',email='$email',phno1='$phno1',phno2='$phno2',wrk='$wrk',expr='$expr',photo='$photo' where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	
	$sql = "update user set password='$password'where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../profile.php");

?>						
