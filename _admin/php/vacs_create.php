<?php include '../../_php/db_config.php' ?>
<?php include '../../_php/db_connect.php' ?>
<?php include '../../_php/error.php' ?>
<?php
	//Get data in local variable
	$function=htmlentities(addslashes($_POST['function']));
	$spec=htmlentities(addslashes($_POST['spec']));
	$definition=htmlentities(addslashes($_POST['definition']));
	$live=htmlentities(addslashes((isset($_POST['live']) ? 1 : 0)));


	$query="
	insert
	into vacatures
		(vac_functie,vac_spec,vac_txt,vac_active)
	values
		('$function', '$spec', '$definition', '$live')";

	mysqli_query($connect, $query)  or die(mysql_error());
	header ('Location: ../index.php');

?>
