<?php
include('../../db_connect/db.php');


	
	
	$msg_id=$_POST["msg_id"];
	
	$subj=$_POST["subj"];
	$date=$_POST["date"];
	$stats="Accept";
	
	$sql = "update message set reply='$subj',rdate='$date',stats='$stats' where msg_id='$msg_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../message_inbox.php");

?>						
