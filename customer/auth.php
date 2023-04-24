<?php
session_start();
if(!isset($_SESSION['SESS_CUST_ID']) || (trim($_SESSION['SESS_CUST_ID']) == '')) {
	header("location:../");
	exit();
}

?>
