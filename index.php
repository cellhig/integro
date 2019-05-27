<?php
session_start();

if (!isset($_SESSION['nickname'])) {
    header('Location: login.php');
}

require 'Model.php';

$connection = Connection();

if (!$connection) {
    //echo 'no se pudo conectar';
    header('location: error.php');
}

require 'views/index.php';