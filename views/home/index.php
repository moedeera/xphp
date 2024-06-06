

<?php
 basePath('./views/partials/navbar.php')
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
  <?php  include './views/partials/block1.php';
  echo generateBlock1();
  ;?>



<div class="mini-container">
  <?php  include './views/partials/card.php';
foreach ($data1 as $key=>$value):
$student = $value;
echo generateStudentHtml($student);
endforeach; ?>

<button class="btn">Update</button>
 </div>


</div>


</html>