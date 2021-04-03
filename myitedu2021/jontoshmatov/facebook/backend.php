<?php
ini_set("display_errors",1); //errors and exception and how to handle the errors in PHP
session_start();
require_once "database.php";
$obj = new \Database\database("myitedu");
$parms = $_REQUEST;
$user = $_SESSION['user'];
$post_id = $parms['post']??null;
$post_id = (int) $post_id;
if (empty($user)){
    back("login.php", $post_id, "Please login to like the posts", 1);
}
$user_id = $user['id'];
$user_id = (int) $user_id;
//Likes Functions
###########################################
if ($post_id){

    addLikes($obj, $post_id, $user_id);
}
function addLikes($obj, $post_id, $user_id){
   $is_first_time = isThisFirstTime($obj, $post_id, $user_id);



   if($is_first_time){
       //is_first_time must be TRUE
       insertLikeFirstTime($obj, $post_id, $user_id); //If the function false
   }else{
       updatePostLike($obj, $post_id); //If the function returns true
   }
}
###########################################

//Fetch the like by post_id
###########################################
function isThisFirstTime($obj ,$post_id, $user_id){
    $sql =  "SELECT id FROM user_likes WHERE blog_id=$post_id and user_id=$user_id limit 1;";
    $is_there_record = $obj->sql($sql);
    if (empty($is_there_record)){
        return true;
    }
    return false;

}
###########################################

//Fetch the like by post_id
###########################################
function likedBefore($obj ,$post_id, $user_id){
    $sql =  "SELECT id FROM user_likes WHERE blog_id=$post_id and user_id=$user_id limit 1;";
    $result = $obj->sql($sql);

    //If there is a record you liked it before returns true
    //If there is no record that means you never liked before return false

    if (count($result)){
        return true;
    }
    return false;
}
###########################################

//Update the post with a new like
###########################################
function updatePostLike($obj ,$post_id){
    $like = $obj->sql("SELECT likes FROM user_likes WHERE blog_id=$post_id;");


    $obj->sql("UPDATE likes SET likes=likes+1, blog_id=$post_id WHERE blog_id=$post_id;");
    back("index.php",$post_id, "Your Like has been updated. Thank you!");
}
###########################################

//Insert a new like
###########################################
function insertLikeFirstTime($obj ,$post_id, $user_id){
    $like = $obj->sql("INSERT INTO likes (likes, blog_id) VALUES(1, $post_id);");
    $user_likes = $obj->sql("INSERT INTO user_likes (user_id, blog_id) VALUES($user_id, $post_id);");
    back("index.php",$post_id, "Your Like has been inserted. Thank you!");
}
###########################################

//return to main page
###########################################
function back($to, $post_id, $msg=null, $error=0){
    if ($to=='index.php'){
        header("Location: $to?post=$post_id&msg=$msg&error=$error");
    }else{
        header("Location: $to?post=$post_id&msg=$msg&error=$error");
    }
    exit($msg);
}
###########################################