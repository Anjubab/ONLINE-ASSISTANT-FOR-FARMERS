<?php
session_start();
if(!isset($_SESSION['SESS_LABOR_ID']) || (trim($_SESSION['SESS_LABOR_ID']) == '')) {
	header("location:../");
	exit();
}

?>
