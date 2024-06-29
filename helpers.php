<?php

function ReTurnHello(){
    echo 'Hello My fellow coders';
}

function basePath($path){
    include  $path;
}

function pageTemplate1($pageString){

     basePath('./views/partials/navbar.php'); 
     basePath('./views/partials/head.php');
     basePath("./views/{$pageString}/index.php");
    //  basePath("./views/". $pageString ."/index.php");
     basePath("./views/partials/html/footer.html")   ;
}

function postTemplate($postId){
    basePath('./views/partials/head.php');
    basePath('./views/partials/navbar.php'); 
  
    echo '<h1> This is post'. $postId.'</h1>';
   //  basePath("./views/". $pageString ."/index.php");
    basePath("./views/partials/html/footer.html")   ;
}




function POSTS ($postId){

// fetch data using post id
// get data

// function PostTemplate

}