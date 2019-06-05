<?php include  __DIR__ . '/src/components/header/header.php'; ?>


<?php

  session_start();

  $id = $_GET['id'];

  $doel_info = mysqli_query($db, "SELECT * FROM hoofdoelen WHERE ID = '".$id."'");

  $row = mysqli_fetch_array($doel_info,MYSQLI_ASSOC);

  if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];

    $sql = "INSERT INTO subdoelen (TARGETID, NAME, CHECKED)
        VALUES ('$id', '$name', 'nee')";

    mysqli_query($db, $sql);

    header("Location: doelen_detail.php?id=$id");

  }

?>

  <div class="container">
    <a class="button_terug" href="doelen_detail.php?id=<?php echo $id; ?>">Terug</a>
  </div>

  <div class="header__detail">
    <div class="container">

      <div class="title">
        Subdoel toevoegen
      </div>
      <div class="title__content">
        voeg hier samen je subdoel toe voor de categorie <b>'<?php echo $row['NAME']; ?>'</b>.
      </div>

    </div>
  </div>

  <div class="container">
    <ol class="add">

       <form action="" method="POST">
        <span>Naam</span>
        <input type="text" name="name" autocomplete="off">
        <input type="submit" name="submit" value="Toevoegen">
       </form>


    </ol>
  </div>

<?php include __DIR__ . '/src/components/footer/footer.php'; ?>
