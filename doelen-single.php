<?php include  __DIR__ . '/src/components/header/header.php'; ?>

<?php

  session_start();

  $doelen_prio1 = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE PERSONID = '".$_SESSION['personid']."' AND PRIO = 1 ORDER BY ID DESC");
  $count_prio1 = mysqli_num_rows($doelen_prio1);

  $doelen_prio2 = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE PERSONID = '".$_SESSION['personid']."' AND PRIO = 2 ORDER BY ID DESC");
  $count_prio2 = mysqli_num_rows($doelen_prio2);


 ?>

<div class="container add_single">
      <a class="button_terug" href="doelen-single.php">Terug</a>
      <a class="button_toevoegen" href="doel_add.php">Hoofddoel Toevoegen</a>
  </div>

<div class="doelen__single">
  <div class="daily__goals">
    <div class="header">
      Prioriteit 1
      <span><?php echo $count_prio1 ?> doelen</span>
    </div>
    <div class="content">
      <ul>

        <?php while ($row=mysqli_fetch_array($doelen_prio1)) { ?>

        <li>
          <a href="doelen_detail.php?id=<?php echo $row['ID']; ?>"><?php echo $row['NAME']; ?></a>
          <span class="time">
            <?php echo $row['TIME']; ?> min.
          </span>
          <div class="text">
            <?php echo $row['INFO']; ?>
          </div>
        </li>

        <?php } ?>

      </ul>
    </div>
  </div>

  <div class="sub__goals">
    <div class="header">
      Prioriteit 2
      <span><?php echo $count_prio2 ?> doelen</span>
    </div>
    <div class="content">
      <ul>

        <?php while ($row=mysqli_fetch_array($doelen_prio2)) { ?>

        <li>
          <a href="doelen_detail.php?id=<?php echo $row['ID']; ?>"><?php echo $row['NAME']; ?></a>
          <span class="time">
            <?php echo $row['TIME']; ?> min.
          </span>
          <div class="text">
            <?php echo $row['INFO']; ?>
          </div>
        </li>

        <?php } ?>

      </ul>
    </div>
  </div>
</div>


<?php include __DIR__ . '/src/components/footer/footer.php'; ?>
