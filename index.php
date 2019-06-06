<?php

  include  __DIR__ . '/src/components/header/header.php';

?>

<?php

	// LOGIN CODE

	session_start();

	if(isset($_POST['submit'])) {

		$myusername = mysqli_real_escape_string($db,$_POST['username']);
  		$mypassword = mysqli_real_escape_string($db,$_POST['password']);

		$sql = "SELECT ID, ROLE FROM PERSONEN WHERE USERNAME = '$myusername' and PASSWORD = '$mypassword'";
	    $result = mysqli_query($db,$sql);
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $count = mysqli_num_rows($result);

			if ($count == 1) {

				 $functie = $row["ROLE"];

				if ($functie == "begeleider") {

					// GEEF PERSOONID MEE
					$_SESSION['personid'] = $row["ID"];

					header("Location: begeleider.php");

				} else {

					// GEEF PERSOONID MEE
					$_SESSION['personid'] = $row["ID"];

					header("Location: app_home.php");

				}

				

			}

	}

 ?>

 <!-- HTML -->

 <div class="logo">
   <img src="src/includes/img/logo.png" alt="">
 </div>
<div class="login">
 <form action="" method="POST">
  <span>Email adres</span>
	<input type="text" name="username" placeholder="Email" autocomplete="off">
  <span>Wachtwoord</span>
	<input type="password" name="password" placeholder="wachtwoord">
  <a class="forgot-pass" href="#">Wachtwoord vergeten?</a>
	<input type="submit" name="submit" value="Inloggen">
 </form>
 </div>

<?php

  include __DIR__ . '/src/components/footer/footer.php';

?>
