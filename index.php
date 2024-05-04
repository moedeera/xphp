<?php 

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
    case $root . "/":
        require "views/home/index.php";
        break;
    case $root . "/about":
        require "views/about/index.php";
        break;
   case $root . "/posts/:id": 
       addRoute("/example", "YurController.php") ;
        break;   
     default:
     echo $root . $uri;
         require "error.php"   ;
         break;

};

