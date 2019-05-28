<?php

  include  __DIR__ . '/src/components/header/header.php';

?>

<?php 

	// ONTVANG CHECKLIST DATA

	session_start();

	$res = mysqli_query($db, "SELECT * FROM checklist WHERE PERSONID = '".$_SESSION['personid']."'");

	while ($row=mysqli_fetch_array($res)) { 

	

 ?>

 <!-- HTML -->

	<?php if ($row['CHECKED'] == "ja"): ?>
		 <input type="checkbox" checked>
	<?php else: ?>
		 <input type="checkbox">
	<?php endif; ?>


 <h3><?php echo $row['TARGET_NAME']; ?></h3>
 <p><?php echo $row['COMMENT']; ?></p>

<?php 

 	};

?>

 <a href="checklist_add.php">VOEG TOE</a>

<?php

  include __DIR__ . '/src/components/footer/footer.php';

?>
