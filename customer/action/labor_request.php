<?php
	include('../../db_connect/db.php');
	require("../auth.php");
	$Log_Id=$_SESSION['SESS_CUST_ID'];

	$lbrid=$_GET['lbrid'];
	$result = $db->prepare("select * from  labor where lbrid = '$lbrid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$LLog_id=$row["Log_id"];	
			$lname=$row["name"];			
			$laddr=$row["addr"];
			$lphno=$row["phno"];
		}
	
	$result = $db->prepare("select * from  customer where Log_Id = '$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$FLog_id=$row["Log_id"];	
			$fname=$row["name"];			
			$faddr=$row["addr"];
			$fphno=$row["phno"];
		}	
	
	$date=date("Y-m-d");
	$stats="Pending";

	
	
	$sql = "insert into lbrequest(LLog_id,lname,laddr,lphno,FLog_id,fname,faddr,fphno,date,stats)values('$LLog_id','$lname','$laddr','$lphno','$FLog_id','$fname','$faddr','$fphno','$date','$stats')";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../labor_request.php");

?>						
