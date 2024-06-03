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
<div class="my-4 min-h-96  flex flex-col-reverse md:grid md:grid-cols-2">
<div class="p-3 my-4 ">
<div class="font-bold text-5xl mb-2">Headline</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<button class="border rounded font-bold px-2 py-2 my-2 w-max bg-gray-200 hover:bg-gray-100 ease-in-out">Read More</button>
</div>
<div class="h-56 min-w-56  border bg-center bg-cover md:min-h-56 md:h-full"
    style="background-image:url('views/home/taco.png');"
       ></div>
</div>



<div class="mini-container">
  <?php  require './views/partials/card.php';
foreach ($data1 as $key=>$value):
$student = $value;
echo generateStudentHtml($student);
endforeach; ?>

<button class="btn">Update</button>
 </div>


</div>


</html>