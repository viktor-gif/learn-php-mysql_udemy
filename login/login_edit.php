<?php

    include "db_connection.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        // $update_query = "UPDATE `users` SET `name` = '$name',
        //  `email` = '$email', `password` = '$password'
        //  WHERE `id` = $id";

        $update_query = "UPDATE `users` SET";
        $update_query .= " `name` = '$name',";
        $update_query .= " `email` = '$email',";
        $update_query .= " `password` = '$password'";
        $update_query .= " WHERE `id` = $id";


        $update_query_result = mysqli_query($connection, $update_query);

        if (!$update_query_result) {
            die("Query failed ".mysqli_error($connection));
        }
    }
    $query = "SELECT * FROM `users`;";

    $query_result = mysqli_query($connection, $query);

    if (!$query_result) {
        die("Query failed ".mysqli_error($connection));
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
        <form class="login-form" action="login_edit.php" method="post">
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
            <select name="id">
                <?php
                    while ($row = mysqli_fetch_assoc($query_result)) {
                        $id = $row['id'];
                        echo "<option value='$id'>$id</option>";
                    }
                ?>
            </select>
            <button type="submit" name="submit">edit</button>
        </form>
    </main>
</body>
</html>