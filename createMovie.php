<?php

require 'Model.php';

$connection = Connection();
if (!$connection) {
	header('Location: error.php');
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['date']) && isset($_POST['synopsis'])) {

    $title = $_POST['title'];
    $date = $_POST['date'];
    $synopsis = $_POST['synopsis'];

    $newMovie = createNewMovie($connection, $title, $synopsis, $date);

    if ($newMovie) {
        return print_r(json_encode('guardada'));
    } else {
        return print_r(json_encode('no guardada'));
    }
    

    
} else {
    return print_r(json_encode('revise los datos'));
}