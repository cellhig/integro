<?php

require 'Model.php';

$connection = Connection();
if (!$connection) {
	header('Location: error.php');
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $allMovies = getAllMovies($connection);

    if ($allMovies) {
        return print_r(json_encode( $allMovies));
    } else {
        return print_r(json_encode( $allMovies));
    }
    

    
} else {
    return print_r(json_encode('no'));
}