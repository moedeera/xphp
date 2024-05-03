<?php 

$uri = $_SERVER['REQUEST_URI'];

$root = "/xphp";

switch ($uri) {
    case $root . "/":
        require "views/home/index.php";
        break;
    case $root . "/about":
        require "views/about/index.php";
        break;
     default:
         require "error.php"   ;
         break;
};

