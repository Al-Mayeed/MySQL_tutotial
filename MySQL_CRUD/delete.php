<?php

$link = @mysqli_connect('localhost', 'paponweb_LearnMySQL', 'mayeed', 'paponweb_LearnMySQL') or die("ERROR: Unable to connect: " . mysqli_connect_error());


$recv=$_REQUEST['id'];

$query="DELETE FROM user_info WHERE id=$recv";

$run_delete_query=mysqli_query($link,$query);

if($run_delete_query){
    header("location:deleteData.php?deleted");
}

?>