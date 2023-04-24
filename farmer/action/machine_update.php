<?php
include('../../db_connect/db.php');


	
	
	$vcno=$_POST["vcno"];
	
	$name=$_POST["name"];
	$vmodel=$_POST["vmodel"];
	$vtype=$_POST["vtype"];
	$cmpny=$_POST["cmpny"];
	$vrate=$_POST["vrate"];
	$cntno1=$_POST["cntno1"];
	$vcno=$_POST["vcno"];
	$desp=$_POST["desp"];		
	
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../vphoto/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	
	if($photo=="")
	{
	$sql = "update machine set name='$name',vmodel='$vmodel',vrate='$vrate',cntno1='$cntno1',desp='$desp',vtype='$vtype',cmpny='$cmpny' where vcno='$vcno'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	else
	{
		$sql = "update machine set name='$name',vmodel='$vmodel',vrate='$vrate',cntno1='$cntno1',photo='$photo',desp='$desp',vtype='$vtype',cmpny='$cmpny' where vcno='$vcno'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}

	header("location:../machine_search.php");

?>						
