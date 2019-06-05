<?php include  __DIR__ . '/src/components/header/header.php'; ?>

<?php

  // ONTVANG CHECKLIST DATA

  session_start();

  $id = $_GET['id'];

  $doel_info = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE ID = '".$id."'");

  $row = mysqli_fetch_array($doel_info,MYSQLI_ASSOC);

  $subdoelen = mysqli_query($db, "SELECT * FROM subdoelen WHERE TARGETID = '".$row['ID']."'");

  if(isset($_POST['submit'])) {

    $count=count($_POST["iddoel"]);

    echo $count;

    for($i=0;$i<$count;$i++){

      $test = "koek";

      $sql="UPDATE subdoelen SET CHECKED='" . $_POST['checkbox'][$i] . "' WHERE ID='" . $_POST['iddoel'][$i] . "'";
      mysqli_query($db, $sql);

    }

    header("Location: doelen-single.php");

  }

  //mysql_close();
  

 ?>

  <div class="container">
      <a class="button_terug" href="doelen-single.php">Terug</a>
      <a class="button_toevoegen" href="subdoel_add.php?id=<?php echo $id; ?>">Subdoel Toevoegen</a>
  </div>

  <div class="header__detail">
    <div class="container">

      <div class="title">
        <?php echo $row['NAME']; ?>
        <span><?php echo $row['TIME']; ?> min</span>
      </div>
      <div class="title__content">
        <?php echo $row['INFO']; ?>
      </div>

      <div class="bar">
        <div class="inner_bar">

        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <form action="" method="POST">
    <ol class="list">
      
      <?php 
        while ($subdoel=mysqli_fetch_array($subdoelen)) {
      ?>

        <?php if ($subdoel['CHECKED'] == "ja"): ?>
           <input name="iddoel[]" type="hidden" value="<?php echo $subdoel['ID']; ?>">
           <li><span><?php echo $subdoel['NAME']; ?></span> <div class="checkbox checked" id="check" onclick="test(<?php echo $subdoel['ID']; ?>, '<?php echo $subdoel['CHECKED']; ?>')"></div></li>
           <input name="checkbox[]" type="hidden" id="checkbox<?php echo $subdoel['ID']; ?>" value="<?php echo $subdoel['CHECKED']; ?>">
        <?php else: ?>
            <input name="iddoel[]" type="hidden" value="<?php echo $subdoel['ID']; ?>">
           <li><span><?php echo $subdoel['NAME']; ?></span> <div class="checkbox" id="check" onclick="test(<?php echo $subdoel['ID']; ?>, '<?php echo $subdoel['CHECKED']; ?>')"></div></li>
           <input name="checkbox[]" type="hidden" id="checkbox<?php echo $subdoel['ID']; ?>" value="<?php echo $subdoel['CHECKED']; ?>">
        <?php endif; ?>

      <?php 
        }
      ?>

      

    </ol>
    <input type="submit" name="submit" value="toevoegen">
    </form>

  </div>





<?php include __DIR__ . '/src/components/footer/footer.php'; ?>
