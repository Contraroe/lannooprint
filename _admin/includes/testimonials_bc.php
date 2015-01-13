<div id="testimonials_bc">
	<h1>Edit <span>Testimonials</span></h1>
	<?php include "../_php/db_config.php" ?>
	<?php include "../_php/db_connect.php" ?>

		<?php
$result = mysqli_query($connect, "SELECT * 
			FROM testimonials
			ORDER BY testimonials_date 
			DESC
		");

//		if (!$result) { die('Invalid query: Line 7' . mysql_error());};

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
				$f5=html_entity_decode($row[4]);
				$f6="testimonials";
		?>

			<div id="testimonials">
				<div id="id"  class="<?php if (htmlspecialchars($f5) == 1)  echo "live"; ?>"><?php if (htmlspecialchars($f5) == 1) { echo "live";} else {echo "not live";} ?>
					<div id="delete"><a href="../_admin/php/delete_test.php?id=<?php echo $f1 ?>&db=<?php echo $f6 ?>">X</a></div>
					<div id="state"><a href="../_admin/php/update_test.php?id=<?php echo $f1 ?>&db=<?php echo $f6 ?>&active=<?php echo $f5 ?>"><?php echo htmlspecialchars($f5); ?></a></div>
				</div>
				<div id="functie"><?php echo htmlspecialchars($f2); ?></div>
				<div id="spec"><?php echo htmlspecialchars($f3); ?></div>
				<div id="txt"><?php echo htmlspecialchars($f4); ?></div>
			</div>

	<?php
		 $i++;
			}
		}
	?>
</div>