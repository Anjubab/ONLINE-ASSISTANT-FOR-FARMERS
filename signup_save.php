<?php
include('db_connect/db.php');


	$Log_Id="FRMID".rand(789645002,0);
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$utype=$_POST["utype"];
	
	$date=date("Y-m-d");
	
	$sql = "insert into user(Log_Id,name,email,password,utype) VALUES ('$Log_Id','$name','$email','$password','$utype')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	if($utype=="Farmer")
	{
	$sql = "insert into farmer(Log_Id,name,email,date) VALUES ('$Log_Id','$name','$email','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	if($utype=="Agent")
	{
	$sql = "insert into agent(Log_Id,name,email,date) VALUES ('$Log_Id','$name','$email','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	if($utype=="Labor")
	{
	$sql = "insert into labor(Log_Id,name,email,date) VALUES ('$Log_Id','$name','$email','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	if($utype=="Customer")
	{
	$sql = "insert into customer(Log_Id,name,email,date) VALUES ('$Log_Id','$name','$email','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	header("location:login.php");

?>						
