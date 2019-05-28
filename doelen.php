<?php

  include  __DIR__ . '/src/components/header/header.php';

?>

<?php 

	// ONTVANG CHECKLIST DATA

	session_start();

	$res = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE PERSONID = '".$_SESSION['personid']."'");
	
	//$doelen = mysqli_query($db, "SELECT * FROM subdoelen WHERE TARGETID = '".$test["ID"]."'");

	while ($row=mysqli_fetch_array($res)) { 

		$doelen = mysqli_query($db, "SELECT * FROM subdoelen WHERE TARGETID = '".$row["ID"]."'");
		$checked = mysqli_query($db, "SELECT * FROM subdoelen WHERE TARGETID = '".$row["ID"]."' AND CHECKED = 'ja'");

		$count_total = mysqli_num_rows($doelen);
		$count_checked = mysqli_num_rows($checked);
	
 ?>

 <!-- HTML -->
<div class="hoofddoel">

 <h3><?php echo $row['NAME']; ?></h3>
 <meter value="<?php echo $count_checked ?>" min="0" max="<?php echo $count_total ?>"></meter>
 <br>

<?php 

	while ($test=mysqli_fetch_array($doelen)) {

?>

	<div class="subdoel">

	<?php if ($test['CHECKED'] == "ja"): ?>
		 <label class="container"><?php echo $test['NAME']; ?>
		  <input type="checkbox" checked="checked">
		  <span class="checkmark"></span>
		</label>
	<?php else: ?>
		 <label class="container"><?php echo $test['NAME']; ?>
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>
	<?php endif; ?>

	 </div>

<?php

	};

?>

 <a href="subdoel_add.php?id=<?php echo $row['ID']; ?>">VOEG SUBDOEL TOE</a>

</div>
<?php

 	};

?>
	<br><br>
 <a href="hoofddoel_add.php">VOEG HOOFDDOEL TOE</a>

<?php

  include __DIR__ . '/src/components/footer/footer.php';

?>
