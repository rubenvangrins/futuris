<?php

  include  __DIR__ . '/src/components/header/header.php';

?>

<?php 

	// VOEG ACTIVITEIT TOE

	session_start();

	if(isset($_POST['submit'])) {

		$personid = $_SESSION['personid'];
		$targetdate = $_POST['date'];
		$targetname = $_POST['targetname'];
		$comment = $_POST['comment'];

		$sql = "INSERT INTO checklist (PERSONID, TARGET_DATE, DAYPART, TARGET_NAME, COMMENT, CHECKED)
				VALUES ('$personid', '$targetdate', 'NaN', $targetname', '$comment', 'nee')";

		mysqli_query($db, $sql);

		header("Location: checklist.php");

	}

 ?>

<!-- HTML -->

 <form action="" method="POST">
 	<input type="date" name="date">
	<input type="text" name="targetname">
	<input type="text" name="comment">
	<input type="submit" name="submit" value="Toevoegen">
 </form>

<?php

  include __DIR__ . '/src/components/footer/footer.php';

?>
