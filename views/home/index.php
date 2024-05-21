<?php
 basePath('./views/partials/navbar.php')
?>
<?php
 basePath('./views/partials/head.php')
?>
<?php 

$data1 = [
  ['name' => "John Smith", 'age' => 20, 'graduated' => false],
  ['name' => "Samantha Jones", 'age' => 22, 'graduated' => true],
  ['name' => "Cindy Walker", 'age' => 25, 'graduated' => false],
  ['name' => "Winston Hughes", 'age' => 27, 'graduated' => true]
];

$data2 = [
  ['name' => "John Smith", 'age' => 20, 'graduated' => false],
  ['name' => "Samantha Jones", 'age' => 22, 'graduated' => true],
  ['name' => "Cindy Walker", 'age' => 25, 'graduated' => false],
  ['name' => "Winston Hughes", 'age' => 27, 'graduated' => true]
];

$variable1= "Student data";
$format = $_GET['format'] ?? 'html'; // Check for a 'format' parameter in URL
$dataset = $_GET['dataset'] ?? 'data1';
$response = ($dataset === 'data2') ? $data2 : $data1;

if ($format === 'json') {
  header('Content-Type: application/json');
  echo json_encode($response);
  exit; // Stop script execution after JSON output
}

?>


<div class="container" >
  <!-- You can output PHP including variables, etc -->



<div class="landing-container">
  <div class="landing-text">
    <small>Delicious food collection</small>
    <?php foreach($data1 as $dat): ?>
    <?php echo "hello"; ?>
<?php endforeach; ?>

    <h1>Indulge Your Tastebuds </h1>
    <p>The restaurant is an organic space reflective of our Head Chef's nature inspired cuisine. The interplay of textures and colour brings life and a vibrance that embraces the restaurant’s place. An ode to the Asian landscape, from the vast ocean floor, to the cracked bark of a paperbark tree, every detail from the ground up has been thoughtfully considered.</p>
   <button class="btn">Explore Menu</button>
  </div>
  <div class="landing-picture">


  </div>
</div>


<div class="mini-container">
<?php foreach ($data1 as $student):?>
  <div class="mini-container-unit">
  <h3> <?php echo $student['name'];  ?></h3>
  <p> Age: <?php echo $student['age'];  ?></p>
  <small> <?php  echo $student['graduated']? "Graduated":"Enrolled"  ?> </small>
</div>
<?php endforeach; ?>
<button class="btn">Update</button>
 </div>


</div>


</html>