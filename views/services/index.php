

  <?php include "./views/partials/pageHeader.php";

echo createPageHeader("Services", "https://images.pexels.com/photos/1805600/pexels-photo-1805600.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1")
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
   "image"=>"https://images.pexels.com/photos/1805600/pexels-photo-1805600.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"

);

  echo generateBlock1($block1data);
  ;?>

</div>

</html>