<?php
include('../../db_connect/db.php');


	
	
	$Log_Id=$_POST["Log_Id"];
	
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
	
	
	
	$sql = "insert into machine(Log_Id,name,vmodel,vrate,cntno1,vcno,photo,desp,vtype,cmpny)values('$Log_Id','$name','$vmodel','$vrate','$cntno1','$vcno','$photo','$desp','$vtype','$cmpny')";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../machine_search.php");

?>						
