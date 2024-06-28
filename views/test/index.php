<?php include "./views/partials/pageHeader.php";

echo createPageHeader("About Us", "https://images.pexels.com/photos/1805600/pexels-photo-1805600.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1")
  ?>
<div class="container w-4/5 mx-auto">

<?php  include './views/partials/block1.php';
$block1data = array(
  "header"=>"Our Story",
   "content"=>"Welcome to FreshCuts, where style meets precision.
    Our barbershop offers top-notch grooming services, blending classic techniques with modern trends.
    At FreshCuts, every haircut is a masterpiece, crafted to enhance your unique look.
    Join us for an exceptional grooming experience that leaves you feeling fresh and confident.",
   "button"=>array(
    "text"=>"SEE MENU ",
    "link"=>"/"
   ),
   "image"=>"https://images.pexels.com/photos/1570806/pexels-photo-1570806.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"

);

  echo generateBlock1($block1data);
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