<?php include  __DIR__ . '/src/components/header/header.php'; ?>


<?php

  session_start();

  if(isset($_POST['submit'])) {

    $id = $_SESSION['personid'];
    $name = $_POST['name'];
    $info = $_POST['info'];
    $time = $_POST['time'];
    $priority = $_POST['priority'];
    $timespan = $_POST['timespan'];

    $sql = "INSERT INTO hoofdoelen (PERSONID, NAME, INFO, TIME, PRIO, TIMESPAN)
        VALUES ('$id', '$name', '$info', '$time', '$priority', '$timespan')";

    mysqli_query($db, $sql);

    header("Location: doelen-single.php");

  }

?>

  <div class="container">
    <a class="button_terug" href="doelen-single.php">Terug</a>
  </div>

  <div class="header__detail">
    <div class="container">

      <div class="title">
        Hoofddoel toevoegen
      </div>
      <div class="title__content">
        voeg hier samen je hoofddoel met bijbehoorende subtoelen toe.
      </div>

    </div>
  </div>

  <div class="container">
    <ol class="add">

       <form action="" method="POST">
        <span>Naam</span>
        <input type="text" name="name" autocomplete="off">
        <span>Beschijving</span>
        <textarea name="info"></textarea>
        <span>Aantal minuten</span>
        <input type="text" name="time" autocomplete="off">
        <span>Prioriteit</span>
        <select name="priority">
          <option value="1" selected>Prioriteit 1</option>
          <option value="2">Prioriteit 2</option>
        </select>
        <span>Herhaling</span>
        <select name="timespan">
          <option value="eenmalig" selected>Eenmalig</option>
          <option value="dagelijks">Dagelijk</option>
        </select>
        <input type="submit" name="submit" value="Toevoegen">
       </form>


    </ol>
  </div>

<?php include __DIR__ . '/src/components/footer/footer.php'; ?>
