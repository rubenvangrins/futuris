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
      <img src="src/includes/img/footer-menu.png" alt="">
      <a class="footer__link" href="doelen-single.php"></a>
    </div>

<?php


  }

?>


</div>




  <script type="text/javascript" src="src/includes/js/main.js"></script>
</html>
