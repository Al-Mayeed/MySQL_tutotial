<?php

$connection = @mysqli_connect('localhost', 'paponweb_LearnMySQL', 'mayeed', 'paponweb_LearnMySQL') or die("ERROR: Unable to connect: " . mysqli_connect_error());

if(isset($_REQUEST['submit'])){
   $user= $_REQUEST['username'];
   $email= $_REQUEST['email'];
   $pass= $_REQUEST['password'];

   $hidden_id= $_REQUEST['updating_hidden_id'];

    $update_query="UPDATE user_info SET username = '$user',email='$email',password='$pass' WHERE id=$hidden_id";

    $final_update_query=mysqli_query($connection,$update_query);

    if($final_update_query){
        header("location: deleteData.php?updated");
    }


}