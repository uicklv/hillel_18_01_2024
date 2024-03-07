<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //todo post
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {

    header('Content-Type: image/jpeg;');
//    echo "<h1>Hello it's GET Method</h1>";

    header('Location: http://localhost:8080/get.php');

    exit;
}

