<?php include '../../_php/db_config.php' ?>
<?php include '../../_php/db_connect.php' ?>
<?php include '../../_php/error.php' ?>
<?php
	//Get data in local variable
	$customer=htmlentities(addslashes($_POST['customer']));
	$testimonial=htmlentities(addslashes($_POST['testimonial']));
	$date=htmlentities(addslashes($_POST['date']));
	$live=htmlentities(addslashes((isset($_POST['live']) ? 1 : 0)));


	$query="
	insert
	into testimonials
		(testimonials_klant,testimonials_date,testimonials_txt,testimonials_active)
	values
		('$customer', '$date', '$testimonial', '$live')";

	mysqli_query($connect, $query)  or die(mysql_error());
	header ('Location: ../index.php');

?>
