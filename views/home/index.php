<?php 
basePath('./views/partials/navbar.php'); ?> 
<?php
 basePath('./views/partials/head.php'); ?>

<?php 


$stmt = $pdo->prepare('SELECT * FROM employee');
$stmt-> execute();
//fetch results
$results = $stmt->fetchAll();


?>


<div class="container" >
  <!-- You can output PHP including variables, etc -->
  <?php  include './views/partials/block1.php';
  echo generateBlock1();
  ;?>





</div>


</html>