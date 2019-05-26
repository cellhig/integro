<?php

require 'Model.php';

$connection = Connection();
if (!$connection) {
	header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST["name"];
    $nickname = $_POST["nickname"];
    $pasword = md5($_POST["password"]);

    createUser($connection, $name, $nickname, $pasword);

    header('location: index.php');
}