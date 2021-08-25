<?php

    include "db_connection.php";

    // Вместо '=' можно написать ключевое слово 'LIKE'
    // $query = "SELECT * FROM `users` WHERE `email` = 'klim.victor.ua@gmail.com';";

    // Запрос с 'gmail.com' в конце email
    // $query = "SELECT * FROM `users` WHERE `email` LIKE '%gmail.com';";

    // Запрос с 'w' в начале name
    // $query = "SELECT * FROM `users` WHERE `name` LIKE 'w%';";

    // Запрос с '2' где-то посредине password
    // $query = "SELECT * FROM `users` WHERE `password` LIKE '%2%';";

    // можно '>', '<', '=', '<=', '>='
    // $query = "SELECT * FROM `users` WHERE `id` < 3;";

    // $query = "SELECT `name`, `email` FROM `users` WHERE `id` < 3;";

    $query = "SELECT `name`, `email` FROM `users` WHERE `id` < 3 AND `email` LIKE '%gmail.com';";

    $query_result = mysqli_query($connection, $query);

    if (!$query_result) {
        die("Query failed ".mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($query_result)) {
        ?>
        <pre>
            <?php print_r($row); ?>
        </pre>
        <?php
    }

?>
