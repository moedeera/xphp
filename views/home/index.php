<?php basePath('./views/partials/navbar.php'); ?> 
<?php  basePath('./views/partials/head.php'); ?>




<div class="px-3 md:w-4/5 md:px-0 mx-auto " >
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
$block1data = array(
  "header"=>"Fresh style lives here",
   "content"=>"Welcome to FreshCuts, where style meets precision.
    Our barbershop offers top-notch grooming services, blending classic techniques with modern trends.
    At FreshCuts, every haircut is a masterpiece, crafted to enhance your unique look.
    Join us for an exceptional grooming experience that leaves you feeling fresh and confident.",
   "button"=>array(
    "text"=>"SEE MENU ",
    "link"=>"/"
   ),
   "image"=>"https://images.pexels.com/photos/1805600/pexels-photo-1805600.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"

);

  echo generateBlock1($block1data);
  ;?>


<!-- <?php include './views/partials/gallery2.php'; ?> -->

<?php include './views/partials/gallery.php'; 
$mockData = [
  'title' => 'Prices',
  'items' => [
      [
          'item' => 'Standard Cut',
          'image' => 'https://placehold.co/600x400',
          'price' => ['$21.99']
      ],
      [
          'item' => 'Deluxe Cut',
          'image' => 'https://placehold.co/600x400',
          'price' => ['$29.99']
      ],
      [
          'item' => 'Premium Cut',
          'image' => 'https://placehold.co/600x400',
          'price' => ['$39.99']
      ]
  ]
];

// Render the gallery with the mock data
renderImageGallery($mockData);
;?>

<?php  include './views/partials/block1reverse.php';
$block1data = array(
  "header"=>"Award Winning Service",
   "content"=>"Welcome to FreshCuts, where style meets precision.
    Our barbershop offers top-notch grooming services, blending classic techniques with modern trends.
    At FreshCuts, every haircut is a masterpiece, crafted to enhance your unique look.
    Join us for an exceptional grooming experience that leaves you feeling fresh and confident.",
   "button"=>array(
    "text"=>"Read More ",
    "link"=>"/"
   ),
   "image"=>"https://images.pexels.com/photos/897273/pexels-photo-897273.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"

);
  echo generateBlock1Reverse($block1data);
  ;?>
</div>
 <!-- Banner -->
<?php include "./views/partials/html/banner.html" ?>
<!-- Contact Form -->
 <?php include "./views/partials/html/contactForm.html"?>



</html>