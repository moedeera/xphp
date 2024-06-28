<?php 
basePath('./views/partials/navbar.php'); ?> 
<?php
 basePath('./views/partials/head.php'); ?>

  <?php include "./views/partials/pageHeader.php";

echo createPageHeader("Our Works", "https://images.pexels.com/photos/1805600/pexels-photo-1805600.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1")
  ?>
<div class="container w-4/5 mx-auto">

 <?php include './views/partials/gallery2.php'; ?> 



</div>
<?php include "./views/partials/html/footer.html"?>
</html>