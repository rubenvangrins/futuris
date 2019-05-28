<?php

  include  __DIR__ . '/src/components/header/header.php';

?>

<?php 

	// VOEG HOOFDDOEL TOE

	session_start();

	if(isset($_POST['submit'])) {

		$id = $_SESSION['personid'];
		$name = $_POST['name'];	
		$rerun = $_POST['rerun'];

		$sql = "INSERT INTO hoofdoelen (PERSONID, NAME, RERUN)
				VALUES ('$id', '$name', '$rerun')";

		mysqli_query($db, $sql);

		header("Location: doelen.php");

	}

 ?>

<!-- HTML -->

 <form action="" method="POST">
	<input type="text" name="name">
	<input type="text" name="rerun" value="eenmalig">
	<input type="submit" name="submit" value="Toevoegen">
 </form>

<?php

  include __DIR__ . '/src/components/footer/footer.php';

?>
