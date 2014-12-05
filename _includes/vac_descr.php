   <?php include '_php/error.php' ?>
   <?php include '_php/db_config.php' ?>
	<?php include '_php/db_connect.php' ?>
	<?php
		$id = $_REQUEST["id"];
		$vac=mysqli_query($connect,"SELECT *
			FROM vacatures
			WHERE vac_id = '$id'
			");

		$row=mysqli_fetch_row($vac);
		$v1=html_entity_decode($row[0]);
		$v2=html_entity_decode($row[1]);
		$v3=html_entity_decode($row[2]);
		$v4=html_entity_decode($row[3]);
	?>

<div id="vac_cont">
	<div id="vac_nav" >
		<div id="sluit"></div>
	</div>
	<h1 id="vac_title">Jobs</h1>
	<?php
		$result=mysqli_query($connect," SELECT *
			FROM vacatures
			WHERE vac_active = 1
		");
		$numa=mysqli_num_rows($result);
		mysqli_close($connect);
			if (!empty($numa)) {
		$i=0;
		while ($i < $numa) {
			mysqli_data_seek($result,$i);
			$row=mysqli_fetch_row($result);
			$f1=html_entity_decode($row[0]);
			$f2=html_entity_decode($row[1]);
			$f3=html_entity_decode($row[2]);
			$f4=html_entity_decode($row[3]);
	?>
<div id="vacs" >

	<a href="jobs.php?id=<?php echo htmlspecialchars($f1); ?>"><?php echo ($f2); ?><br>
	<span id="spec"><?php echo htmlspecialchars($f3); ?></span></a>
</div>

<?php
	$i++;
	}
}
?>
<script src="_js/vacs.js"></script>
</div>