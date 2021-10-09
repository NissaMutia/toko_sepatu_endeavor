<?php
	include 'session.php';

	if($_SESSION['username']!=NULL){
		session_unset();
		session_destroy();
		header("location: ../index.php");	
	}
	else
	{
		header("location: ../page/form_login.php");
	}
?>