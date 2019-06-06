</div>
<div class="mobilemenu">
<?php

  $homepage = "/";
  $add = "doelen-single.php";

  $currentpage = $_SERVER['REQUEST_URI'];

  if($homepage==$currentpage) {

  } else {

  ?>
  
    <div class="footer__bottom">
      <img src="src/includes/img/footer-menu2.png" alt="">
      <a class="footer__link" href="doelen-single.php"></a>
      <a class="footer__link3" href="app_home.php"></a>
      <a class="footer__link2" href="profile.php"></a>
    </div>

<?php


  }

?>


</div>




  <script type="text/javascript" src="src/includes/js/main.js"></script>
</html>
