<?php
$experts_id = $_REQUEST['experts_email'];
$experts_pass = $_REQUEST['experts_pass'];

if ($experts_id == "experts" AND $experts_pass == "123"){
	$_SESSION['username']= $experts_id;
	header('location: experts_home.php');
}
	else {
	 header ('location: wrong_page.php');
	 
	}
?>