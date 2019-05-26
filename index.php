<?php

require 'Model.php';

$connection = Connection();

if (!$connection) {
    //echo 'no se pudo conectar';
    header('location: error.php');
}