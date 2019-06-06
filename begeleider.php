<?php include  __DIR__ . '/src/components/header/header.php'; ?>

<?php

  session_start();

      $sql = "SELECT * FROM personen WHERE ID = '".$_SESSION['personid']."'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      $clienten = mysqli_query($db, "SELECT * FROM personen WHERE MENTOR_1 = '".$row['NAME']."' OR MENTOR_2 = '".$row['NAME']."'");

?>



  <div class="header__detail">
    <div class="container">

      <div class="title">
        <?php echo $row['NAME']; ?>
      </div>
      <div class="title__content">
        Krijg hier meer inzichten over de voortgang van jouw cliënten.
      </div>

    </div>
  </div>

  <div class="container">
      
  <div class="daily__goals">
    <div class="header">
      Cliënten
    </div>
    <div class="content">
      <ul>

        <?php while ($row=mysqli_fetch_array($clienten)) { ?>

        <li>
          <a href="doelen-single.php?id=<?php echo $row['ID']; ?>"><?php echo $row['NAME']; ?></a>
        </li>

        <?php } ?>

      </ul>
    </div>
  </div>
      


  </div>

<?php include __DIR__ . '/src/components/footer/footer.php'; ?>