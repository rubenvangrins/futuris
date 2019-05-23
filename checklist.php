<?php

  include  __DIR__ . '/src/components/header/header.php';

?>

<?php 

	// ONTVANG CHECKLIST DATA

	session_start();

	$res = mysqli_query($db, "SELECT * FROM checklist WHERE PERSONID = '".$_SESSION['personid']."'");

	while ($row=mysqli_fetch_array($res)) { 

		echo $row['TARGET_NAME'];

	}

 ?>

 <!-- HTML -->

 <a href="checklist_add.php">VOEG TOE</a>

<?php

  include __DIR__ . '/src/components/footer/footer.php';

?>
