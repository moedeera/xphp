<?php 
$host='us-cluster-east-01.k8s.cleardb.net';
$port="3306";
$dbName="heroku_569477d4d6a38b9";
$username="b0f25289553103";
$password="40ebff09";

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";



try {
$pdo= new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



}
catch(PDOException $e){

    echo 'Connection &/Or Fetching failed'. $e->getMessage();

}
?>