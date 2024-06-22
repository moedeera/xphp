<?php 
basePath('./views/partials/navbar.php'); ?> 
<?php
 basePath('./views/partials/head.php'); ?>

<?php 





?>


<div class="container" >
  <div class="container-bg-image"> <video autoplay muted loop id="background-video">
      <source src="https://videos.pexels.com/video-files/3998508/3998508-uhd_2732_1440_25fps.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video></div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
      const video = document.getElementById('background-video');
      const thumbnail = document.getElementById('background-thumbnail');

      video.oncanplaythrough = function () {
        video.classList.add('loaded');
        thumbnail.classList.add('hidden');
        video.play();
      };
    });
    </script>
  <div class="container-bg-overlay-color"></div>
 <!-- You can output PHP including variables, etc -->
<?php include './views/partials/html/landing.html';?>

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