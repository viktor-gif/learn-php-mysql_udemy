<?php

    session_start();

    echo $_SESSION['name'];

    include "db_connection.php";

    if (isset($_POST['submit'])) {

        if (!$_POST['email'] OR !$_POST['password']) {
            echo 'You must input email and password';
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $select_query = "SELECT * FROM `users` WHERE `email` = '$email'";
            $select_query_result = mysqli_query($connection, $select_query);
            if (mysqli_num_rows($select_query_result) > 0) {
                echo "This email already exists, please input annother email";
            } else {
                $query = "INSERT INTO `users` (`name`, `email`, `password`) 
                    VALUES ('$name', '$email', '$password');";
                $query_result = mysqli_query($connection, $query);

                if (!$query_result) {
                    die("Query failed ");
                } else {
                    $_SESSION['email'] = $email;
                    header("Location: session_and_cookies.php");
                    echo 'You are signed up';
                }
            }
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
        <form class="login-form" action="login_task.php" method="post">
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