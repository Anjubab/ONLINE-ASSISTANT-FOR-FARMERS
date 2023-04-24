<?php
include('../../db_connect/db.php');


	
	
	$Log_Id=$_POST["Log_Id"];
	
	$name=$_POST["name"];
	$phno=$_POST["phno"];
	$subj=$_POST["subj"];
	$date=$_POST["date"];
	$stats="Pending";
	
	$sql = "insert into message(Log_Id,name,phno,subj,date,stats)values('$Log_Id','$name','$phno','$subj','$date','$stats')";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../message_inbox.php");

?>						
