<?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email.'<br>';
        echo $password;

        $connection = mysqli_connect('localhost', 'root', '', 'udemy_db');
        if ($connection) {
            echo 'DB is connected';
        } else {
            die('Connection failed');
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
        <form class="login-form" action="login.php" method="post">
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