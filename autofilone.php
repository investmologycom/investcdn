<?php
include "config.php";
if(isset($_POST["title"]) && isset($_POST["content"]))
 {
     $post_id = mysqli_real_escape_string($con, $_POST["postid"]);
     $post_title = mysqli_real_escape_string($con, $_POST["title"]);
     $post_description = mysqli_real_escape_string($con, $_POST["content"]);
   
  if($post_id != '')  
  {  
    //update post  
    $sql = "UPDATE posts SET title = '".$post_title."', description = '".$post_description."' WHERE id =       '".$_POST["postid"]."'";  
     mysqli_query($con, $sql);       
  }  
  else  
  {  
    //insert post  
    $sql = "INSERT INTO posts(title,description) VALUES ('".$post_title."', '".$post_description."')";     
    mysqli_query($con, $sql);  
    $last_insert_id = mysqli_insert_id($con);  
    echo $last_insert_id;exit;
  }
 }  
  ?>