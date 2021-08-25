<?php
    $connection = mysqli_connect('localhost', 'root', '', 'udemy_db');

    if (!$connection) {
        die('Connection failed');
    }
?>