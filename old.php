<?php 



switch ($uri) {  

    
    case $root . "/home":    
        pageTemplate1("home");
        break;
    case $root . "/test":    
        pageTemplate1("test");
            break;    
    case $root . "/login":
        pageTemplate1("login");
        break;
    case $root . "/services":
        pageTemplate1("services");
        break;
    case $root . "/gallery":
        pageTemplate1("gallery");
        break;
    case $root . "/":
        pageTemplate1("home");
        break;
    case $root . "/about":
        pageTemplate1("about");
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

?>