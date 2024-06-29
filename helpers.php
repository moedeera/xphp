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
    require "./views/posts/index.php";
    basePath('./views/partials/headSub.php');
    basePath('./views/partials/navbarSub.php'); 
  
  renderPostPage($postId);
   //  basePath("./views/". $pageString ."/index.php");
    basePath("./views/partials/html/footer.html")   ;
}




function POSTS ($postId){

// fetch data using post id
// get data

// function PostTemplate

}