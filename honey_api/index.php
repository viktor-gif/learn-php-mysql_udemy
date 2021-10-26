<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Allow-Credentials: true');
    // header('Content-Type: application/json');

    require 'files_php/connect.php';
    require 'files_php/functions.php';

    $method = $_SERVER['REQUEST_METHOD'];

    echo $method;

    $q = $_GET['q'];
    
    $params = explode('/', $q);
    echo '<br>';
    print_r($params);
    echo '<br>';

    echo '<br>';
    echo '<br>';

   
    $type = $params[0];
    $id = $params[1];

    if ($method === 'GET') {
        getProducts($connect);
        if ($type === 'products') {
            if (isset($id)) {
                getPost($connect, $id);
            } else {
                
            }
        }
    } elseif ($method === 'POST') {
        if ($type === 'posts') {
            addPost($connect, $_POST);
        }
    } elseif ($method === 'PATCH') {
        if ($type === 'posts') {
            if (isset($id)) {
                $data = file_get_contents('php://input');
                $data = json_decode($data, true);
                
                // die($data['title']);
                updatePost($connect, $id, $data);
            }
        }
    } elseif ($method === 'DELETE') {
        if ($type === 'posts') {
            if (isset($id)) {
                deletePost($connect, $id);
            }
        }
    }