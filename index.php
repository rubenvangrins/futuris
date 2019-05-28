<?php

  include  __DIR__ . '/src/components/header/header.php';

?>

<?php

	// LOGIN CODE

	session_start();

	if(isset($_POST['submit'])) {

		$myusername = mysqli_real_escape_string($db,$_POST['username']);
  		$mypassword = mysqli_real_escape_string($db,$_POST['password']);

		$sql = "SELECT ID FROM PERSONEN WHERE USERNAME = '$myusername' and PASSWORD = '$mypassword'";
	    $result = mysqli_query($db,$sql);
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $count = mysqli_num_rows($result);

			if ($count == 1) {

				// GEEF PERSOONID MEE
				$_SESSION['personid'] = $row["ID"];

				header("Location: doelen.php");

			}

	}

 ?>

 <!-- HTML -->

 <form action="" method="POST">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="submit" value="Inloggen">
 </form>

<?php

  include __DIR__ . '/src/components/footer/footer.php';

?>
