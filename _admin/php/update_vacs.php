<?php include '../../php/db_config.php' ?>
<?php include '../../php/db_connect.php' ?>
<?php
	
	//Get data in local variable
	$id = $_REQUEST["id"];
	$db = $_REQUEST["db"];
	$active = $_REQUEST["active"];

	if ($active == 1) $active = '0';
	elseif ($active == 0) $active = '1';


	$query=" UPDATE $db SET vac_active = '$active' WHERE vac_id = '$id' ";

	mysql_query($query)  or die(mysql_error());
	header ('Location: ../index.php');

?> 
