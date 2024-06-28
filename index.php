<?php 

// connect database
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

switch ($uri) {  

    
    case $root . "/home":    
        require "views/home/index.php";
        break;
    case $root . "/test":    
        pageTemplate1("test");
            break;    
    case $root . "/login":
        require "views/login/index.php";
        break;
    case $root . "/services":
        require "views/services/index.php";
        break;
    case $root . "/gallery":
        require "views/gallery/index.php";
        break;
    case $root . "/":
        require "views/home/index.php";
        break;
    case $root . "/about":
        require "views/about/index.php";
        break;


        default:
        if (strpos($uri, $root . "/posts/") === 0) {
            $postIdentifier = substr($uri, strlen($root . "/posts/"));
            echo "<h1>You are on post $postIdentifier</h1>";
        } else {
            require "error.php";
        }
        break;

};

