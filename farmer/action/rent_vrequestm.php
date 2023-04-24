<?php
include('../../db_connect/db.php');

	$VFLog_Id=$_POST["VFLog_Id"];
	$vname=$_POST["vname"];
	$vcno=$_POST["vcno"];
	$vmodel=$_POST["vmodel"];
	$vtype=$_POST["vtype"];
	$cmpny=$_POST["cmpny"];
	$vrate=$_POST["vrate"];
	$cntno1=$_POST["cntno1"];
	$desp=$_POST["desp"];
	$FLog_Id=$_POST["FLog_Id"];
	$fname=$_POST["fname"];
	$faddr=$_POST["faddr"];
	$fphno=$_POST["fphno"];
	$date=date("Y-m-d");
	$ndate=$_POST["ndate"];
	$stats="Pending";

	
	$sql = "insert into requestvehicle(VFLog_Id,vname,vcno,vmodel,vtype,cmpny,vrate,cntno1,desp,FLog_Id,fname,faddr,fphno,date,ndate,stats)values('$VFLog_Id','$vname','$vcno','$vmodel','$vtype','$cmpny','$vrate','$cntno1','$desp','$FLog_Id','$fname','$faddr','$fphno','$date','$ndate','$stats')";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../vm_request.php");

?>						
