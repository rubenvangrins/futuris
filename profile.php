<?php include  __DIR__ . '/src/components/header/header.php'; ?>

<?php

	session_start();

		$sql = "SELECT * FROM PERSONEN WHERE ID = '".$_SESSION['personid']."'";
	    $result = mysqli_query($db,$sql);
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	    $doelen_checked = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE PERSONID = '".$_SESSION['personid']."' AND TIMESPAN = 'dagelijks' ORDER BY ID DESC LIMIT 2");
	    $doelen_dagelijks = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE PERSONID = '".$_SESSION['personid']."' AND TIMESPAN = 'dagelijks' ORDER BY ID DESC");

?>

  <div class="container">
      <a class="button_terug" href="doelen-single.php">Doelen</a>
  </div>

  <div class="header__detail">
    <div class="container">

      <div class="title">
        <?php echo $row['NAME']; ?>
      </div>
      <div class="title__content">
      	Krijg hier meer inzichten over je behaalde en je voortgang in jouw doelen.
      </div>

    </div>
  </div>

  <div class="container">

  <div class="daily__goals">
    <div class="header">
      Doelen behaald vandaag
    </div>
    <div class="content">
      <ul>

      	<?php while ($row=mysqli_fetch_array($doelen_checked)) { ?>

        <li>
          <a href="doelen_detail.php?id=<?php echo $row['ID']; ?>"><?php echo $row['NAME']; ?></a>
        </li>

        <?php } ?>

      </ul>
    </div>
  </div>
  <div class="daily__goals">
    <div class="header">
      Doelen behaald deze week
    </div>
    <div class="content graph">
    	<img src="src/includes/img/graph.png" alt="">
    </div>
  </div>
  <div class="sub__goals">
    <div class="header">
      Streaks
    </div>
    <div class="content streak">
      <ul>

      	<?php while ($row=mysqli_fetch_array($doelen_dagelijks)) { ?>

       <li>
          <a href="doelen_detail.php?id=<?php echo $row['ID']; ?>"><?php echo $row['NAME']; ?></a>
        </li> 
   

        <?php } ?>

      </ul>
    </div>
  </div>

  </div>

<?php include __DIR__ . '/src/components/footer/footer.php'; ?>