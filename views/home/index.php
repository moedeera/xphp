<?php
 basePath('./views/partials/navbar.php')
?>
<?php
 basePath('./views/partials/head.php');

?>
<?php 


$stmt = $pdo->prepare('SELECT * FROM employee');
$stmt-> execute();
//fetch results
$results = $stmt->fetchAll();


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



<div class="landing-container ">
  <div class="landing-text">
    <small>Delicious food collection</small>
    <h1>Indulge Your Tastebuds </h1>
    <p>The restaurant is an organic space reflective of our Head Chef's nature inspired cuisine. The interplay of textures and colour brings life and a vibrance that embraces the restaurant’s place. An ode to the Asian landscape, from the vast ocean floor, to the cracked bark of a paperbark tree, every detail from the ground up has been thoughtfully considered.</p>
   <button class="btn">Explore Menu</button>
  </div>

<img src="views/home/taco.png" alt="taco" >

  
</div>


<div class="mini-container">
  
  <?php 



require './views/partials/card.php';
$data1 = [
  ['name' => "John Smith", 'age' => 20, 'graduated' => false],
  ['name' => "Samantha Jones", 'age' => 22, 'graduated' => true],
  ['name' => "Cindy Walker", 'age' => 25, 'graduated' => false],
  ['name' => "Winston Hughes", 'age' => 27, 'graduated' => true]
];
foreach ($data1 as $key=>$value):
$student = $value;
echo generateStudentHtml($student);
endforeach; ?>

<button class="btn">Update</button>
 </div>


</div>


</html>