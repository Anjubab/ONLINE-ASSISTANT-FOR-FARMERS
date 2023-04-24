<?php
include('../../db_connect/db.php');

	$p_id=$_POST["p_id"];
	$result = $db->prepare("SELECT * FROM product where p_id='$p_id'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$qty=$rows["qty"];
		$photo=$rows["photo"];
	}
	$FLog_Id=$_POST["FLog_Id"];
	$fname=$_POST["fname"];
	$faddr=$_POST["faddr"];
	$fphno=$_POST["fphno"];
	$CLog_Id=$_POST["CLog_Id"];
	$cname=$_POST["cname"];
	$caddr=$_POST["caddr"];
	$cphno=$_POST["cphno"];
	$pname=$_POST["pname"];
	$buy=$_POST["buy"];
	$prce=$_POST["prce"];
	$tot=$_POST["tot"];
	$date=$_POST["date"];
	$desp=$_POST["desp"];
		

	$uqty=$qty-$buy;
			
	$stats="Pending";
	
	$sql = "insert into cart(FLog_Id,fname,faddr,fphno,CLog_Id,cname,caddr,cphno,pname,buy,prce,tot,date,desp,stats,photo)values('$FLog_Id','$fname','$faddr','$fphno','$CLog_Id','$cname','$caddr','$cphno','$pname','$buy','$prce','$tot','$date','$desp','$stats','$photo')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	$sql = "update product set qty='$uqty' where p_id='$p_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();

	header("location:../payment.php");
?>						
