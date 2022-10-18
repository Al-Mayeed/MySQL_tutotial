<?php

$connection = @mysqli_connect('localhost', 'paponweb_LearnMySQL', 'mayeed', 'paponweb_LearnMySQL') or die("ERROR: Unable to connect: " . mysqli_connect_error());


if(isset($_REQUEST['edit_id'])){
     $recv_id=$_REQUEST['edit_id'];

     $get_info="SELECT * FROM user_info WHERE id=$recv_id";

     $select_info=mysqli_query($connection,$get_info);

     while($row= mysqli_fetch_assoc($select_info)){
        
?>

<form action="update_data.php" method="POST">
    <input type="text" name="username" placeholder="username" value="<?php echo $row['username']?>">
    <input type="text" name="email" placeholder="email" value="<?php echo $row['email']?>">
    <input type="password" name="password" placeholder="password" value="<?php echo $row['password']?>">
    <input type="submit" name="submit"  value="update">
    <input type="hidden" name="updating_hidden_id" value="<?php echo $recv_id;?>">
</form>

<?php
     }


}


 
?>
