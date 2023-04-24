<?php
session_start();
if(!isset($_SESSION['SESS_AGENT_ID']) || (trim($_SESSION['SESS_AGENT_ID']) == '')) {
	header("location:../");
	exit();
}

?>
