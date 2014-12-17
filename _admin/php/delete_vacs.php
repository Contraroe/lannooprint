<?php include '../../_php/db_config.php' ?>
<?php include '../../_php/db_connect.php' ?>
<?php
	//Get data in local variable
	$id = $_REQUEST["id"];
	$db = $_REQUEST["db"];


	$query=" DELETE FROM $db WHERE vac_id = '$id'";

	mysqli_query($query)  or die(mysql_error());
	header ('Location: ../index.php');

?> 
