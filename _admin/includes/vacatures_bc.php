<div id="vacs_bc">
	<h1>Edit <span>Vacatures</span></h1>
	<?php include "../_php/db_config.php" ?>
	<?php include "../_php/db_connect.php" ?>

	<?php
		$result = mysqli_query($connect, "SELECT *
			FROM vacatures
	");

	$data = mysqli_num_rows($result);
	mysqli_close($connect);
	if (!empty($data)) {

	// Dbase Content 

	$i=0;
	while ($i < $data) {
		mysqli_data_seek($result,$i);
		$row=mysqli_fetch_row($result);
		$f1=html_entity_decode($row[0]);
		$f2=html_entity_decode($row[1]);
		$f3=html_entity_decode($row[2]);
		$f4=html_entity_decode($row[3]);
		$f5=html_entity_decode($row[4]);
		$f6=html_entity_decode($row[4]);
		$f6="vacatures";
		?>

			<div id="vacatures">
				<div id="id"  class="<?php if (htmlspecialchars($f5) == 1)  echo "live"; ?>"><?php if (htmlspecialchars($f5) == 1) { echo "live";} else {echo "not live";} ?> 
					<div id="delete"><a href="../_admin/php/delete_vacs.php?id=<?php echo $f1 ?>&db=<?php echo $f6 ?>">X</a></div>
					<div id="state"><a href="../_admin/php/update_vacs.php?id=<?php echo $f1 ?>&db=<?php echo $f6 ?>&active=<?php echo $f5 ?>"><?php echo htmlspecialchars($f5); ?></a></div>
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