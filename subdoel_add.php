<?php

  include  __DIR__ . '/src/components/header/header.php';

?>

<?php

	// VOEG ACTIVITEIT TOE

	session_start();

	$id = $_GET['id'];

	if(isset($_POST['submit'])) {

		$name = $_POST['name'];
		$timespan = $_POST['timespan'];
		$priority = $_POST['priority'];

		$sql = "INSERT INTO subdoelen (TARGETID, NAME, CHECKED, TIMESPAN, PRIORITY)
				VALUES ('$id', '$name', 'nee', '$timespan', '$priority')";

		mysqli_query($db, $sql);

		header("Location: doelen.php");

	}

 ?>

<!-- HTML -->

 <form action="" method="POST">
	<input type="text" name="name">
	<input type="text" name="timespan" value="0">
	<input type="text" name="priority" value="0">
	<input type="submit" name="submit" value="Toevoegen">
 </form>

<?php

  include __DIR__ . '/src/components/footer/footer.php';

?>
