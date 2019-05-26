<?php

require 'Model.php';

$connection = Connection();

if (!$connection) {
    //echo 'no se pudo conectar';
    header('location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user = $_POST['user'];
    $validateIfUserExist = validateIfUserExist($connection, $user);
    echo $validateIfUserExist;
}