<?php

if (!isset($_SESSION['usuario'])) {
	header('Location: login.php');
}

require 'Model.php';

$connection = Connection();

if (!$connection) {
    //echo 'no se pudo conectar';
    header('location: error.php');
}