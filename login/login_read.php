<?php
    
    include "db_connection.php";

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
    <div>
        <div>

            <?php
                // Неассоциативный массив
                // while ($row = mysqli_fetch_row($query_result)) {
                //     print_r($row);
                // }

                // Ассоциативный массив
                while ($row = mysqli_fetch_assoc($query_result)) {
                    ?>
                    <pre>
                        <?php print_r($row); ?>
                    </pre>
                    <?php
                }
            ?>

        </div>
    </div>
</body>
</html>