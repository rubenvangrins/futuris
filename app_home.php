<?php include  __DIR__ . '/src/components/header/header.php'; ?>

<?php

  session_start();

  $doelen_eenmalig = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE PERSONID = '".$_SESSION['personid']."' AND TIMESPAN = 'eenmalig' ORDER BY ID DESC");
  $doelen_dagelijks = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE PERSONID = '".$_SESSION['personid']."' AND TIMESPAN = 'dagelijks' ORDER BY ID DESC");

?>

  <div class="daily__goals">
    <div class="header">
      Vandaag behalen
    </div>
    <div class="content">
      <ul>

          <?php while ($row=mysqli_fetch_array($doelen_dagelijks)) { ?>

        <li>
          <a href="doelen_detail.php?id=<?php echo $row['ID']; ?>"><?php echo $row['NAME']; ?></a>
          <span class="time">
            <?php echo $row['TIME']; ?> min.
          </span>
        </li>

          <?php } ?>



      </ul>
    </div>
  </div>

  <div class="feedback">
    <div class="header">
      Begeleiders feedback
    </div>
    <div class="content">
      <ul>
        <li>Het verbeteren van je ochterritueel gaat erg goed, dit doel zal vanaf volgende week dan ook gan vervallen!</li>
        <li>Als ik vandaag langs kom wil ik graag zien dat je je hebt ingeschreven voor danslas, zodat dit doel ook afgevingt kan worden.</li>
      </ul>
    </div>
  </div>

  <div class="sub__goals">
    <div class="header">
      Overige doelen
    </div>
    <div class="content">
      <ul>

          <?php while ($row=mysqli_fetch_array($doelen_eenmalig)) { ?>

        <li>
          <a href="doelen_detail.php?id=<?php echo $row['ID']; ?>"><?php echo $row['NAME']; ?></a>
          <span class="time">
            <?php echo $row['TIME']; ?> min.
          </span>
        </li>

          <?php } ?>
          
      </ul>
    </div>
  </div>

<?php include __DIR__ . '/src/components/footer/footer.php'; ?>
