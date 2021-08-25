<?php
    // установка сookie
    setcookie('user_id', '1111', time() + 60 * 60 * 24 * 7);
    echo $_COOKIE['user_id'];

    // удаление сookie
    // setcookie('user_id', '', time() - 60 * 60 * 24 * 7);

    // переопределение cookie
    $_COOKIE['user_id'] = '2222';
    echo $_COOKIE['user_id'];



    // session работает до закрытия браузера, виден во всех файлах

    // session_start();

    // $_SESSION['name'] = 'jake1234';
    // echo $_SESSION['name'];

    // if ($_SESSION['email']) {
    //     echo 'You are logged in';
    // } else {
    //     header("Location: login_task.php");
    // }


?>