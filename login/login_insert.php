<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // echo $email.'<br>';
        // echo $password;

        $connection = mysqli_connect('localhost', 'root', '', 'udemy_db');

        if ($connection) {
            echo 'Database is connected';
        } else {
            die('Connection failed');
        }

        $query = "INSERT INTO `users` (`name`, `email`, `password`) 
            values ('$name', '$email', '$password');";
        $query_result = mysqli_query($connection, $query);

        if (!$query_result) {
            die("Query failed ");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form class="login-form" action="login_insert.php" method="post">
        <div class="name">
                <label for="name">name</label>
                <input id="name" name="name" type="text">
            </div>
            <div class="email">
                <label for="email">email address</label>
                <input id="email" name="email" type="text">
            </div>
            <div class="password">
                <label for="password">password</label>
                <input id="password" name="password" type="text">
            </div>
            <div class="checkbox">
                <input id="check" name="check" type="checkbox">
                <label for="check">check me out</label>
            </div>
            <button type="submit" name="submit">submit</button>
        </form>
    </main>
</body>
</html>