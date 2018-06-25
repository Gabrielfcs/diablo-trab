<?php
	include "conf.inc.php";
	$connection = mysqli_connect($host,$user,$password,$dbname);

	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
	}
?>