<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        

        $link = @mysqli_connect('localhost', 'paponweb_LearnMySQL', 'mayeed', 'paponweb_LearnMySQL') or die("ERROR: Unable to connect: " . mysqli_connect_error());
        // var_dump($link);

        echo '<h1>Server connected to the database successfully!</h1>';

        $sql = "SELECT * FROM user_info";

        $result=mysqli_query($link, $sql);

        $count=mysqli_num_rows($result);

        if($count>0){
            while($row= mysqli_fetch_assoc($result)){
                echo " {$row['id']}   ".   "    {$row['username']}   "."   {$row['email']}   ";
                echo '<br>';
           }
        }else{
            echo "No data in the database";
        }

        

         
    
 



    //mysqli_connect(host, username, password, dbname)


    ?>


    
</body>

</html>