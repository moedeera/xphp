<?php 
basePath('./views/partials/navbar.php'); ?> 
<?php
 basePath('./views/partials/head.php'); ?>

<?php 





?>


<div class="container" >
 <!-- You can output PHP including variables, etc -->

  <?php  include './views/partials/block1.php';
  echo generateBlock1();
  ;?>


<?php  include './views/partials/block1reverse.php';
  echo generateBlock1Reverse();
  ;?>

<?php  include './views/partials/listBlock.php';
  echo generateListBlock();
  ;?>


</div>


</html>