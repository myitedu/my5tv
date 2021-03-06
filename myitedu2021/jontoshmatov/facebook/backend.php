<?php
ini_set("display_errors",1);
session_start();
require_once "database.php";
$obj = new \Database\database("myitedu");
$parms = $_REQUEST;
$user = $_SESSION['user'];
$post_id = $parms['post']??null;
$post_id = (int) $post_id;
if (empty($user)){
    back("login.php", $post_id, "Please login to like the posts");
}
$user_id = $user['id'];
//Likes Functions
###########################################
if ($post_id){
    addLikes($obj, $post_id, $user_id);
}
function addLikes($obj, $post_id, $user_id){
   if(isThisFirstTime($obj, $post_id, $user_id)){
       updatePostLike($obj, $post_id);
   }else{
       insertLikeFirstTime($obj, $post_id, $user_id);
   }
}
###########################################

//Fetch the like by post_id
###########################################
function isThisFirstTime($obj ,$post_id, $user_id){
    $votedBefore = $obj->sql("SELECT id FROM user_likes WHERE blog_id=$post_id and user_id=$user_id limit 1;");
    $votedBefore =  (bool) $votedBefore;
    $liked_before = likedBefore($obj, $post_id);

    if ($votedBefore){
        back("index.php", $post_id,"can not vote because you voted before");
    }

    if ($liked_before){
        return true;
    }else{
        return false;
    }


}
###########################################

//Fetch the like by post_id
###########################################
function likedBefore($obj ,$post_id){
    $result = $obj->sql("SELECT id FROM likes WHERE blog_id=$post_id limit 1;");
    return (bool) count($result)??false;
}
###########################################

//Update the post with a new like
###########################################
function updatePostLike($obj ,$post_id){
    $like = $obj->sql("UPDATE likes SET likes=likes+1, blog_id=$post_id WHERE blog_id=$post_id;");
    back("index.php",$post_id, "Your Like has been applied. Thank you!");
}
###########################################

//Insert a new like
###########################################
function insertLikeFirstTime($obj ,$post_id, $user_id){
    $like = $obj->sql("INSERT INTO likes (likes, blog_id) VALUES(1, $post_id);");
    $user_likes = $obj->sql("INSERT INTO user_likes (user_id, blog_id) VALUES($user_id, $post_id);");
    back("index.php",$post_id, "Your Like has been applied. Thank you!");
}
###########################################

//return to main page
###########################################
function back($to, $post_id, $msg=null){
    if ($to=='index.php'){
        header("Location: $to?post=$post_id&msg=$msg");
    }else{
        header("Location: $to?post=$post_id&msg=$msg");
    }
    exit($msg);
}
###########################################