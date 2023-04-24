<?php
include('../../db_connect/db.php');


	$Log_Id=$_POST["Log_Id"];		
	$name=$_POST["name"];		
	$sex=$_POST["sex"];
	$age=$_POST["age"];
	$dob=$_POST["dob"];
	$location=$_POST["location"];
	$addr=$_POST["addr"];
	$email=$_POST["email"];
	$phno=$_POST["phno"];
	$ftype=$_POST["ftype"];
	$wrk=$_POST["wrk"];
	$skls=$_POST["skls"];
	$quli=$_POST["quli"];
	$expr=$_POST["expr"];
	
	
	$password=$_POST["password"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	if($photo=="")
	{
	$sql = "update farmer set name='$name',sex='$sex',age='$age',dob='$dob',location='$location',addr='$addr',email='$email',phno='$phno',ftype='$ftype',wrk='$wrk',skls='$skls',quli='$quli',expr='$expr' where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	else
	{
	$sql = "update farmer set name='$name',sex='$sex',age='$age',dob='$dob',location='$location',addr='$addr',email='$email',phno='$phno',ftype='$ftype',wrk='$wrk',skls='$skls',quli='$quli',expr='$expr',photo='$photo' where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	
	$sql = "update user set password='$password'where Log_Id='$Log_Id'";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../profile.php");

?>						
