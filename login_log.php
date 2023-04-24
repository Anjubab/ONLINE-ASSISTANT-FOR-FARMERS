<?php
	//Start session
	session_start();
	
	include('db_connect/db.php');
		
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	//Create query
	$qryfarmer = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Farmer'");
	$qryfarmer->execute();
	$countfarmer = $qryfarmer->rowcount();
	
	//Create query
	$qrylabor = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Labor'");
	$qrylabor->execute();
	$countlabor = $qrylabor->rowcount();
	
	//Create query
	$qryagent = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Agent'");
	$qryagent->execute();
	$countagent = $qryagent->rowcount();
	
	//Create query
	$qryadmin = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Admin'");
	$qryadmin->execute();
	$countadmin = $qryadmin->rowcount();
	
	//Create query
	$qrycust= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Customer'");
	$qrycust->execute();
	$countcust = $qrycust->rowcount();
	
	//Check whether the query was successful or not
	if($countfarmer > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsfarmer= $qryfarmer->fetch();
		$_SESSION['SESS_FARMER_ID'] = $rowsfarmer['Log_Id'];
		session_write_close();
		header("location: farmer/index.php");
		exit();
	}	
	if($countlabor > 0) {
		//Login Successful
		session_regenerate_id();
		$rowslabor= $qrylabor->fetch();
		$_SESSION['SESS_LABOR_ID'] = $rowslabor['Log_Id'];
		session_write_close();
		header("location: labor/index.php");
		exit();
	}	
	if($countagent > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsagent= $qryagent->fetch();
		$_SESSION['SESS_AGENT_ID'] = $rowsagent['Log_Id'];
		session_write_close();
		header("location: agent/index.php");
		exit();
	}	
	if($countadmin > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsadmin= $qryadmin->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rowsadmin['Log_Id'];
		session_write_close();
		header("location: admin/index.php");
		exit();
	}	
	if($countcust > 0) {
		//Login Successful
		session_regenerate_id();
		$rowscust= $qrycust->fetch();
		$_SESSION['SESS_CUST_ID'] = $rowscust['Log_Id'];
		session_write_close();
		header("location: customer/index.php");
		exit();
	}	
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password Try Again'); window.location='login.php'</script>";
		exit();
	}
?>
