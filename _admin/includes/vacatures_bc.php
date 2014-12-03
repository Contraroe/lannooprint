<div id="vacs_bc">
	<h1>Edit <span>Vacatures</span></h1>
	<?php include '../_php/error.php' ?>
	<?php include "../_php/db_config.php" ?>
	<?php include "../_php/db_connect.php" ?>

		<?php
		$result=mysqli_query($connect,"
		            SELECT *
		            FROM 'vacatures'
		        ");
		        $numa=mysqli_num_rows($result);
		        // mysql_close();
		            if (!empty($numa)) {
		?>
		<?php
		        $i=0;
		        while ($i < $numa) {
		            $f1=html_entity_decode(mysql_result($result,$i,"vac_id"));
		            $f2=html_entity_decode(mysql_result($result,$i,"vac_functie"));
		            $f3=html_entity_decode(mysql_result($result,$i,"vac_spec"));
		            $f4=html_entity_decode(mysql_result($result,$i,"vac_txt"));
		            $f5=html_entity_decode(mysql_result($result,$i,"vac_active"));
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