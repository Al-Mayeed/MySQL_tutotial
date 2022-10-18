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


    if (isset($_POST['submit'])) {


        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        if($username && $email && $password){

        

        $link = @mysqli_connect('localhost', 'paponweb_LearnMySQL', 'mayeed', 'paponweb_LearnMySQL') or die("ERROR: Unable to connect: " . mysqli_connect_error());
        // var_dump($link);

        echo '<h1>Server connected to the database successfully!</h1>';

        $sql = "INSERT INTO user_info (username,email,password) VALUES('$username','$email','$password')";

        $result=mysqli_query($link, $sql);

        if ($result) {
            echo "<h2>Your data store in the database.</h2>";
        } else {
            echo "<h2>Database store fail</h2>";
        }
    }else{
        echo "<p>Anything cann't be blank</p>";
    }
    }



    //mysqli_connect(host, username, password, dbname)


    ?>


    <form action="sql.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="User Name">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">

        <input type="submit" name="submit" value="Submit ">
    </form>
</body>

</html>