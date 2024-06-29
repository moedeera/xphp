<?php 

// connect database

use GuzzleHttp\Psr7\Uri;

include "./database.php";
// helper functions
require './helpers.php';

// Server Initiation //
$_ENV = parseEnv();

function path($relativePath): string
{
    return __DIR__ . "/" . $relativePath;
}


function parseEnv(): array
{
    $lines = file(path(".env"), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $config = [];
    foreach ($lines as $line) {
        // Ignore comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($key, $value) = explode('=', $line, 2) + [NULL, NULL];
        if ($key !== NULL && $value !== NULL) {
            $config[trim($key)] = trim($value);
        }
    }

    return $config;
}



$uri = $_SERVER['REQUEST_URI'];

$root = $_ENV["ROOT"] ?? "";

 
function addRoute($route, $data){
echo $route . $data;
}

// echo $root ;
// die() ;

// Define the mapping of URIs to templates
$routes = [
    "$root/home" => "home",
    "$root/test" => "test",
    "$root/login" => "login",
    "$root/services" => "services",
    "$root/gallery" => "gallery",
    "$root/" => "home",
    "$root/about" => "about"
];


if (array_key_exists($uri, $routes)) {
    pageTemplate1($routes[$uri]);
} else if (strpos($uri, $root . "/posts/") === 0) {
 basePath('./views/partials/head.php');
    basePath('./views/partials/navbar.php'); 
    $postIdentifier = substr($uri, strlen($root . "/posts/"));
   
    echo "<h1>You are on post $postIdentifier</h1>";
} else {
    require "error.php";
}
?>