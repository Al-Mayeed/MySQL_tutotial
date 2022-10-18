

<?php
$connection = @mysqli_connect('localhost', 'paponweb_LearnMySQL', 'mayeed', 'paponweb_LearnMySQL') or die("ERROR: Unable to connect: " . mysqli_connect_error());
        // var_dump($link);

        

        $query = "SELECT * FROM user_info";

        $result=mysqli_query($connection, $query);

        $count=mysqli_num_rows($result);


        if($count>0){

?>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>
    </thead>


<?php
            while($row= mysqli_fetch_assoc($result)){
                $db_id= $row['id'];
                $username= $row['username'];
                $email= $row['email'];
                $password= $row['password'];
?>
<tbody>
    <tr>
        <td><?php echo $db_id;?></td>
        <td><?php echo $username;?></td>
        <td><?php echo $email;?></td>
        <td><?php echo $password;?></td>
        <td><a href="single_data_edit.php?edit_id=<?php echo $db_id;?>">Edit </a> || <a href="delete.php?id=<?php echo $db_id?>">Delete</a></td>
    </tr>
</tbody>



<?php
           }

?>

        </table>

<?php
        }else{
            echo "No data in the database";
        }

    ?>

<?php


?>
