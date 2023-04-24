<?php
include('../../db_connect/db.php');
	
	$name=$_POST["name"];
	$phno=$_POST["phno"];
	$subj=$_POST["subj"];
	$date=$_POST["date"];
	
	$sql = "insert into notification(name,phno,subj,date)values('$name','$phno','$subj','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../notification_view.php");

?>						
