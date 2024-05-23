<?php 
$host='localhost';
$port="3306";
$dbName="menudb";
$username="root";
$password="";

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";


try {
$pdo= new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Db connected...';
}
catch(PDOException $e){

    echo 'Connection failed'. $e->getMessage();

}
?>