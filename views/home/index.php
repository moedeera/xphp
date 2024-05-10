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

$dataset = $_GET['dataset'] ?? 'data1';
$response = ($dataset === 'data2') ? $data2 : $data1;

header('Content-Type: application/json');
echo json_encode($response);

?>


<div class="container" >
  <!-- You can output PHP including variables, etc -->

  <a href="./about">About page</a>

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